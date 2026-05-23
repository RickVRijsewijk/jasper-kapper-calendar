<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afspraak;

class AfspraakController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'behandeling' => 'required|string|max:255',
            'datum' => 'required|date',
            'tijd' => 'required|string',
            'opmerking' => 'nullable|string|max:1000',
        ]);

        Afspraak::create([
            'naam' => $data['naam'],
            'email' => $data['email'],
            'behandeling' => $data['behandeling'],
            'datum' => $data['datum'],
            'tijd' => $data['tijd'],
            'opmerking' => $data['opmerking'] ?? null,
        ]);

        return redirect()->route('afspraken.index', ['added' => 1]);
    }

    public function index()
    {
        $afspraken = Afspraak::orderBy('datum')
            ->orderBy('tijd')
            ->get();

        $events = $afspraken->map(function($afspraak) {
            return [
                'title' => $afspraak->behandeling,
                'start' => $afspraak->datum . 'T' . $afspraak->tijd,
                'extendedProps' => [
                    'naam' => $afspraak->naam,
                    'email' => $afspraak->email,
                    'opmerking' => $afspraak->opmerking
                ]
            ];
        });

        return view('afspraken.index', compact('afspraken', 'events'));
    }

    /**
     * Live events endpoint for FullCalendar refetch.
     * Called via AJAX — no layout wrapping, pure JSON.
     */
    public function events()
    {
        $afspraken = Afspraak::orderBy('datum')->orderBy('tijd')->get();

        $events = $afspraken->map(function ($a) {
            return [
                'title'       => $a->behandeling,
                'start'       => $a->datum . 'T' . $a->tijd,
                'extendedProps' => [
                    'naam'     => $a->naam,
                    'email'    => $a->email,
                    'opmerking'=> $a->opmerking,
                ],
            ];
        });

        return response()->json($events);
    }
}
