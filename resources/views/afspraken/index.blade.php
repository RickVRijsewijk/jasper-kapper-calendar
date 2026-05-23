@component('layouts.app', ['title' => __('Afspraken')])
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">Afspraken</h1>
                <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">Overzicht van alle geplande afspraken</p>
            </div>
        </div>

        <!-- Calendar View -->
        <div class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden">
            <div class="p-6 border-b border-zinc-100 dark:border-zinc-800">
                <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">Kalender</h3>
            </div>

            <div class="p-6">
                <!-- The calendar grid should always show, even if there are 0 events -->
                <div id="calendar" style="min-height:480px;"></div>
            </div>
        </div>
    </div>

    <!-- Include FullCalendar CDN library (JS & CSS bundle) -->
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
        
        <script>
            // ─── Morph-safe FullCalendar bootstrap ────────────────────
            function mountCalendar() {
                if (typeof FullCalendar === 'undefined') {
                    setTimeout(mountCalendar, 50);
                    return;
                }
                var calendarEl = document.getElementById('calendar');
                if (!calendarEl) return; 
                if (calendarEl._fcCalendar) return; // Dedupe guard
                
                try {
                    var cal = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        locale: 'nl',
                        events: '/afspraken/events',
                        height: 'auto',
                        eventTimeFormat: {
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: false
                        },
                        eventClick: function(info) {
                            // Populate and open the Tailwind modal — guard each target
                            // against null in case the modal hasn't been mounted yet
                            // when an event click races past the initial render.
                            function setText(id, val) {
                                var el = document.getElementById(id);
                                if (el) el.textContent = val;
                            }

                            var mc = document.getElementById('fc-modal-close');
                            if (mc) mc.classList.remove('hidden');

                            setText('fc-modal-title',       info.event.title                              || 'Afspraak Details');
                            setText('fc-modal-naam',        info.event.extendedProps && info.event.extendedProps.naam     || '-');
                            setText('fc-modal-email',       info.event.extendedProps && info.event.extendedProps.email    || '-');
                            setText('fc-modal-behandeling', info.event.title                              || '-');
                            setText('fc-modal-opmerking',   info.event.extendedProps && info.event.extendedProps.opmerking || '-');

                            var start = info.event.start;
                            if (start) {
                                setText('fc-modal-datum', start.toLocaleDateString('nl-NL', {
                                    weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'
                                }));
                                setText('fc-modal-tijd', start.toLocaleTimeString('nl-NL', {
                                    hour: '2-digit', minute: '2-digit', hour12: false
                                }) + ' uur');
                            }
                        }
                    });
                    cal.render();
                    calendarEl._fcCalendar = cal; // dedupe guard

                    // ── After redirect from ?added=1, force a live refetch ───
                    if (window.location.search.indexOf('added=1') > -1) {
                        cal.refetchEvents();
                        // Clean the URL so a hard-refresh hits /afspraken cleanly
                        history.replaceState(null, '', '/afspraken');
                    }
                } catch (e) {
                    console.error('FullCalendar mount error:', e);
                }
            }

            document.addEventListener('DOMContentLoaded', mountCalendar);
            // Also attempt mount after a short delay for Livewire/Volt morph state
            setTimeout(mountCalendar, 300);
        </script>

        <!-- ── TailwindCSS Detail Modal ─────────────────────────────── -->
        <style>
            /* Force FC day-of-month numbers toblack regardless of theme.
               FC CDN CSS uses ".fc .fc-daygrid -day-number" (specificity 0,1,1)
               so our rule must match or exceed that ordering. */
            .fc .fc-daygrid-day-number { color: #E4E4E4 !important; }
            .fc .fc-col-header-cell-cushion { color: #242424 !important; }
        </style>

        <div id="fc-modal-overlay"
             class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50"
             onclick="closeFcModal()">
            <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden ring-1 ring-zinc-200 dark:ring-zinc-700"
                 onclick="event.stopPropagation()">
                <!-- Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b border-zinc-100 dark:border-zinc-800
                            bg-amber-500">
                    <h3 id="fc-modal-title"
                        class="text-sm font-bold uppercase tracking-wider text-white">
                        Afspraak Details
                    </h3>
                    <button id="fc-modal-close"
                            type="button"
                            class="rounded-md p-1 text-white/80 hover:text-white hover:bg-white/20 transition-colors"
                            onclick="closeFcModal()"
                            aria-label="Sluiten">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <!-- Body -->
                <div class="px-6 py-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14.121 14.121L19 19m-7-7h7m-7-3h7m-7-3h7M4 19h12a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400">Behandeling</div>
                            <div id="fc-modal-behandeling" class="text-sm font-semibold text-zinc-900 dark:text-white"></div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400">Naam</div>
                            <div id="fc-modal-naam" class="text-sm text-zinc-900 dark:text-zinc-100"></div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400">E-mail</div>
                            <div id="fc-modal-email" class="text-sm text-zinc-900 dark:text-zinc-100"></div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 002-2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400">Datum & Tijd</div>
                            <div id="fc-modal-datum" class="text-sm text-zinc-900 dark:text-zinc-100"></div>
                            <div id="fc-modal-tijd"  class="text-sm font-semibold text-zinc-900 dark:text-white"></div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="h-5 w-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400">Opmerking</div>
                            <div id="fc-modal-opmerking" class="text-sm text-zinc-600 dark:text-zinc-300 italic"></div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-6 py-4 border-t border-zinc-100 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-800/50 flex justify-end">
                    <button type="button"
                            onclick="closeFcModal()"
                            class="inline-flex items-center justify-center rounded-md bg-amber-500 px-4 py-2 text-sm font-bold text-white
                                   hover:bg-amber-600 transition-colors shadow">
                        Sluiten
                    </button>
                </div>
            </div>
        </div>

        <script>
            // Close & hide the modal
            function closeFcModal() {
                var overlay = document.getElementById('fc-modal-overlay');
                if (overlay) overlay.classList.add('hidden');
            }

            // Keyboard: Escape closes modal
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeFcModal();
            });
        </script>
    @endpush
@endcomponent