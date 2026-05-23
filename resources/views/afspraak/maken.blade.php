<!DOCTYPE html>
<html lang="nl" class="h-full bg-zinc-50 dark:bg-zinc-950">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nieuwe Afspraak Maken - Jasper Kapper</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                            950: '#451a03',
                        },
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="h-full text-zinc-900 dark:text-zinc-100 antialiased bg-zinc-50 dark:bg-zinc-950">
    <!-- Standalone Header Navigation -->
    <nav class="bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between items-center">
                <div class="flex items-center space-x-3">
                    <span class="text-xl font-black tracking-wider text-amber-600 dark:text-amber-500 uppercase">
                        JASPER KAPPER
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <span
                        class="text-xs font-semibold px-2.5 py-1 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-300">
                        Online Afspraak Systeem
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="py-6 sm:py-8" x-data="{
        naam: '{{ old('naam', '') }}',
        email: '{{ old('email', '') }}',
        behandeling: '{{ old('behandeling', '') }}',
        behandelingNaam: '{{ old('behandeling') ? old('behandeling') : '' }}',
        behandelingPrijs: '0.00',
        behandelingDuur: '0',
        datum: '{{ old('datum', '') }}',
        tijd: '{{ old('tijd', '') }}',
        opmerking: '{{ old('opmerking', '') }}',
    
        treatments: {
            'Knippen': { prijs: '26.50', duur: '30' },
            'Baard Trimmen': { prijs: '18.50', duur: '20' },
            'Knippen & Baard Combo': { prijs: '42.00', duur: '50' },
            'Wassen, Knippen & Stylen': { prijs: '32.00', duur: '45' },
            'Hot Towel Shave': { prijs: '22.50', duur: '30' },
            'Kinderen knippen': { prijs: '19.50', duur: '25' }
        },
    
        init() {
            if (this.behandeling && this.treatments[this.behandeling]) {
                this.behandelingNaam = this.behandeling;
                this.behandelingPrijs = this.treatments[this.behandeling].prijs;
                this.behandelingDuur = this.treatments[this.behandeling].duur;
            }
        },
    
        selectBehandeling(naam) {
            this.behandeling = naam;
            this.behandelingNaam = naam;
            this.behandelingPrijs = this.treatments[naam].prijs;
            this.behandelingDuur = this.treatments[naam].duur;
        },
    
        formatDate(dateStr) {
            if (!dateStr) return '';
            const d = new Date(dateStr);
            return d.toLocaleDateString('nl-NL', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
        }
    }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between mb-8">
                <div class="min-w-0 flex-1">
                    <h1
                        class="text-2xl font-bold leading-7 text-zinc-900 dark:text-white sm:truncate sm:text-3xl tracking-tight">
                        Nieuwe afspraak maken
                    </h1>
                    <p class="mt-2 text-sm text-zinc-500 dark:text-zinc-400">
                        Kies een behandeling, datum en tijdstip dat jou het beste uitkomt.
                    </p>
                </div>
                <div class="mt-4 flex md:ml-4 md:mt-0">
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center rounded-md bg-white dark:bg-zinc-800 px-3 py-2 text-sm font-semibold text-zinc-900 dark:text-zinc-100 shadow-sm ring-1 ring-inset ring-zinc-300 dark:ring-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-700 transition">
                        <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.78 5.22a.75.75 0 010 1.06L8.06 10l3.72 3.72a.75.75 0 11-1.06 1.06l-4.25-4.25a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Terug naar Dashboard
                    </a>
                </div>
            </div>

            <!-- Error Alerts -->
            @if ($errors->any())
                <div
                    class="rounded-md bg-red-50 dark:bg-red-950/40 p-4 mb-8 border border-red-200 dark:border-red-900/50">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800 dark:text-red-200">Er zijn fouten opgetreden bij
                                het invullen van het formulier:</h3>
                            <div class="mt-2 text-sm text-red-700 dark:text-red-300">
                                <ul role="list" class="list-disc pl-5 space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Main Interactive Form Section -->
            <form action="{{ route('afspraak.store') }}" method="POST">
                @csrf

                <!-- Hidden fields to hold interactive Alpine values -->
                <input type="hidden" name="behandeling" x-model="behandeling">
                <input type="hidden" name="datum" x-model="datum">
                <input type="hidden" name="tijd" x-model="tijd">

<div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    
                    <!-- Left and middle sections: Form configuration -->
                    <div class="space-y-8 lg:col-span-2">
                        
                        <!-- Step 0: Personal Information -->
                        <div class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden">
                            <div class="p-6 border-b border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center space-x-3">
                                    <span class="flex h-8 w-8 items-center justify-between rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold text-sm justify-center">
                                        0
                                    </span>
                                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Jouw gegevens</h2>
                                </div>
                            </div>
                            
                            <div class="p-6">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div>
                                        <label for="naam" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                            Naam
                                        </label>
                                        <input type="text" name="naam" id="naam" x-model="naam" required
                                            class=" border border-gray-800 mt-1.5 block w-full rounded-md border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white focus:border-amber-500 focus:ring-amber-500 sm:text-sm p-2.5">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                            E-mailadres
                                        </label>
                                        <input type="email" name="email" id="email" x-model="email" required
                                            class="border border-gray-800 mt-1.5 block w-full rounded-md border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white focus:border-amber-500 focus:ring-amber-500 sm:text-sm p-2.5">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 1: Choose Treatment -->
                        <div
                            class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden">
                            <div class="p-6 border-b border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="flex h-8 w-8 items-center justify-between rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold text-sm justify-center">
                                        1
                                    </span>
                                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Kies een behandeling
                                    </h2>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                    <!-- Treatment: Knippen -->
                                    <button type="button" @click="selectBehandeling('Knippen')"
                                        :class="behandeling === 'Knippen' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Knippen</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€26,50</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">Een frisse,
                                                professionele knipbeurt, afgestemd op jouw wensen.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>30 minuten</span>
                                        </div>
                                    </button>

                                    <!-- Treatment: Baard Trimmen -->
                                    <button type="button" @click="selectBehandeling('Baard Trimmen')"
                                        :class="behandeling === 'Baard Trimmen' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Baard
                                                    Trimmen</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€18,50</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">Nauwkeurig
                                                getrimd, strak afgelijnd en verzorgd met baardolie.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>20 minuten</span>
                                        </div>
                                    </button>

                                    <!-- Treatment: Knippen & Baard Combo -->
                                    <button type="button" @click="selectBehandeling('Knippen & Baard Combo')"
                                        :class="behandeling === 'Knippen & Baard Combo' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div
                                            class="absolute -top-2.5 -right-2 bg-amber-500 text-white text-[10px] uppercase font-bold px-2 py-0.5 rounded shadow">
                                            Combo Voordeel</div>
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Knippen
                                                    & Baard Combo</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€42,00</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">De ultieme
                                                behandeling: haar knippen en je baard strak in model.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>50 minuten</span>
                                        </div>
                                    </button>

                                    <!-- Treatment: Wassen, Knippen & Stylen -->
                                    <button type="button" @click="selectBehandeling('Wassen, Knippen & Stylen')"
                                        :class="behandeling === 'Wassen, Knippen & Stylen' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Wassen,
                                                    Knippen & Stylen</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€32,00</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">Inclusief
                                                verkwikkende wasbeurt, hoofdhuidmassage en styling.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>45 minuten</span>
                                        </div>
                                    </button>

                                    <!-- Treatment: Hot Towel Shave -->
                                    <button type="button" @click="selectBehandeling('Hot Towel Shave')"
                                        :class="behandeling === 'Hot Towel Shave' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Hot
                                                    Towel Shave</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€22,50</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">Klassieke
                                                scheerervaring met warme handdoek en authentieke scheermethode.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>30 minuten</span>
                                        </div>
                                    </button>

                                    <!-- Treatment: Kinderen knippen -->
                                    <button type="button" @click="selectBehandeling('Kinderen knippen')"
                                        :class="behandeling === 'Kinderen knippen' ?
                                            'ring-2 ring-amber-500 bg-amber-500/5 dark:bg-amber-500/10 border-transparent' :
                                            'border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700'"
                                        class="relative flex flex-col justify-between text-left rounded-lg border p-4 shadow-sm focus:outline-none transition group">
                                        <div>
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="text-sm font-semibold text-zinc-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition">Kinderen
                                                    knippen</span>
                                                <span
                                                    class="text-sm font-bold text-zinc-900 dark:text-zinc-100">€19,50</span>
                                            </div>
                                            <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">Kinderen t/m 12
                                                jaar. Gezellig en in no-time weer helemaal hip geknipt.</p>
                                        </div>
                                        <div class="mt-4 flex items-center text-xs text-zinc-400 dark:text-zinc-500">
                                            <svg class="mr-1.5 h-4 w-4 text-zinc-400 dark:text-zinc-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>25 minuten</span>
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Choose Date & Time -->
                        <div
                            class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden">
                            <div class="p-6 border-b border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="flex h-8 w-8 items-center justify-between rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold text-sm justify-center">
                                        2
                                    </span>
                                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Datum & Tijdstip
                                    </h2>
                                </div>
                            </div>

                            <div class="p-6 space-y-6">
                                <!-- Date Input wrapper -->
                                <div>
                                    <label for="datum"
                                        class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                        Datum van de afspraak
                                    </label>
                                    <div class="mt-1.5 relative rounded-md shadow-sm max-w-md">
                                        <input type="date" name="datum" id="datum"
                                            min="{{ date('Y-m-d') }}" x-model="datum"
                                            class="border border-gray-800 block w-full rounded-md border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white focus:border-amber-500 focus:ring-amber-500 sm:text-sm p-2.5 [color-scheme:light] dark:[color-scheme:dark]">
                                    </div>
                                    <p class="mt-2 text-xs text-zinc-500 dark:text-zinc-400">
                                        Let op: We zijn gesloten op zondag en maandag.
                                    </p>
                                </div>

                                <!-- Timeslots grid based on date chosen -->
                                <div x-show="datum" x-transition
                                    class="pt-4 border-t border-zinc-100 dark:border-zinc-800">
                                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-3">
                                        Beschikbare tijden op <span class="font-semibold text-zinc-900 dark:text-white"
                                            x-text="formatDate(datum)"></span>
                                    </label>

                                    <!-- Morning slots -->
                                    <div class="mb-4">
                                        <h4
                                            class="text-xs font-semibold text-zinc-400 dark:text-zinc-500 uppercase tracking-wider mb-2">
                                            Ochtend</h4>
                                        <div class="grid grid-cols-4 gap-2 sm:grid-cols-6 md:grid-cols-8">
                                            <template
                                                x-for="timeSlot in ['09:00', '09:30', '10:00', '10:30', '11:00', '11:30']">
                                                <button type="button" @click="tijd = timeSlot"
                                                    :class="tijd === timeSlot ? 'bg-amber-500 text-white border-transparent' :
                                                        'bg-zinc-50 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 border-zinc-200 dark:border-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-700'"
                                                    class="py-2 px-1 text-center text-xs font-medium rounded border transition"
                                                    x-text="timeSlot">
                                                </button>
                                            </template>
                                        </div>
                                    </div>

                                    <!-- Afternoon slots -->
                                    <div>
                                        <h4
                                            class="text-xs font-semibold text-zinc-400 dark:text-zinc-500 uppercase tracking-wider mb-2">
                                            Middag</h4>
                                        <div class="grid grid-cols-4 gap-2 sm:grid-cols-6 md:grid-cols-8">
                                            <template
                                                x-for="timeSlot in ['13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30']">
                                                <button type="button" @click="tijd = timeSlot"
                                                    :class="tijd === timeSlot ? 'bg-amber-500 text-white border-transparent' :
                                                        'bg-zinc-50 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 border-zinc-200 dark:border-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-700'"
                                                    class="py-2 px-1 text-center text-xs font-medium rounded border transition"
                                                    x-text="timeSlot">
                                                </button>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Optional Notes -->
                        <div
                            class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden">
                            <div class="p-6 border-b border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="flex h-8 w-8 items-center justify-between rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold text-sm justify-center">
                                        3
                                    </span>
                                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Opmerkingen
                                        (optioneel)</h2>
                                </div>
                            </div>

                            <div class="p-6">
                                <div>
                                    <label for="opmerking"
                                        class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                                        Speciale verzoeken of opmerkingen voor de kapper
                                    </label>
                                    <div class="mt-1.5">
                                        <textarea id="opmerking" name="opmerking" rows="3" x-model="opmerking"
                                            placeholder="Bijvoorbeeld: Baard wat langer laten aan de zijkanten, of hoofdhuid is momenteel erg gevoelig..."
                                            class="border border-gray-800block w-full rounded-md border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white focus:border-amber-500 focus:ring-amber-500 sm:text-sm p-3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Right section: Live Summary Card -->
                    <div class="lg:col-span-1">
                        <div
                            class="bg-white dark:bg-zinc-900 shadow-sm ring-1 ring-zinc-200 dark:ring-zinc-800 rounded-xl overflow-hidden lg:sticky lg:top-8">
                            <div
                                class="p-6 border-b border-zinc-100 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-800/50">
                                <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">Jouw Afspraak</h3>
                                <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Overzicht van de geselecteerde
                                    details</p>
                            </div>

                            <div class="p-6 space-y-6">

                                <!-- Behandeling Row -->
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 mt-0.5">
                                        <svg class="h-5 w-5 text-zinc-400 dark:text-zinc-500" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14.121 14.121L19 19m-7-7h7m-7-3h7m-7-3h7M4 19h12a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="text-xs text-zinc-400 dark:text-zinc-500 uppercase tracking-wider font-semibold">
                                            Behandeling</div>
                                        <div class="text-sm font-semibold text-zinc-900 dark:text-white"
                                            x-text="behandelingNaam ? behandelingNaam : 'Geen behandeling geselecteerd'">
                                        </div>
                                        <div class="text-xs text-zinc-500 dark:text-zinc-400 mt-0.5"
                                            x-show="behandeling">
                                            Duur: <span x-text="behandelingDuur"></span> min
                                        </div>
                                    </div>
                                </div>

                                <!-- Datum / Tijd Row -->
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 mt-0.5">
                                        <svg class="h-5 w-5 text-zinc-400 dark:text-zinc-500" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="text-xs text-zinc-400 dark:text-zinc-500 uppercase tracking-wider font-semibold">
                                            Datum & Tijd</div>
                                        <div class="text-sm font-semibold text-zinc-900 dark:text-white"
                                            x-text="datum ? formatDate(datum) : 'Kies een datum'"></div>
                                        <div class="text-sm font-semibold text-zinc-900 dark:text-white mt-0.5"
                                            x-show="tijd">
                                            Tijdstip: <span x-text="tijd"></span> uur
                                        </div>
                                        <div class="text-xs text-zinc-400 dark:text-zinc-500 mt-0.5"
                                            x-show="datum && !tijd">
                                            Kies nog een tijdstip...
                                        </div>
                                    </div>
                                </div>

                                <!-- Live Opmerking Row -->
                                <div class="flex items-start space-x-3" x-show="opmerking">
                                    <div class="flex-shrink-0 mt-0.5">
                                        <svg class="h-5 w-5 text-zinc-400 dark:text-zinc-500" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="text-xs text-zinc-400 dark:text-zinc-500 uppercase tracking-wider font-semibold">
                                            Opmerking</div>
                                        <div class="text-xs text-zinc-600 dark:text-zinc-300 italic"
                                            x-text="opmerking"></div>
                                    </div>
                                </div>

                                <!-- Price Divider & Pricing -->
                                <div class="border-t border-zinc-100 dark:border-zinc-800 pt-6">
                                    <div class="flex justify-between items-center">
                                        <span
                                            class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Totaalprijs:</span>
                                        <span class="text-2xl font-bold text-amber-600 dark:text-amber-400"
                                            x-text="'€' + parseFloat(behandelingPrijs).toFixed(2).replace('.', ',')"></span>
                                    </div>
                                </div>

                                <!-- Action buttons -->
                                <div class="space-y-3 pt-2">
                                    <button type="submit"
                                        :disabled="!naam || !email || !behandeling || !datum || !tijd"
                                        :class="(!naam || !email || !behandeling || !datum || !tijd) ?
                                        'bg-zinc-200 dark:bg-zinc-800 text-zinc-400 dark:text-zinc-500 cursor-not-allowed' :
                                        'bg-amber-500 dark:bg-amber-600 hover:bg-amber-600 dark:hover:bg-amber-700 text-white hover:shadow-lg hover:shadow-amber-500/15'"
                                        class="w-full flex items-center justify-center rounded-lg px-4 py-3 text-sm font-bold shadow transition-all focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                                        Afspraak bevestigen
                                    </button>

                                    <p class="text-[10px] text-zinc-400 dark:text-zinc-500 text-center">
                                        Door op bevestigen te klikken, ga je akkoord met onze huisregels. Je kunt tot 24
                                        uur van tevoren kosteloos annuleren.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>
</body>

</html>
