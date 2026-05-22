<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afspraak;

class AfspraakController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:100',
            'slot' => 'required|string',
            'notes' => 'nullable|string|max:1000',
        ]);

        // slot comes in as "YYYY-MM-DD HH:MM" from the view
        try {
            $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i', $data['slot']);
        } catch (\Exception $e) {
            return back()->withErrors(['slot' => 'Ongeldige datum/tijd geselecteerd.'])->withInput();
        }

        $afspraak = Afspraak::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'service' => $data['service'],
            'slot' => $date,
            'notes' => $data['notes'] ?? null,
        ]);

        return redirect()->route('home')->with('status', 'Afspraak succesvol gepland voor ' . $date->format('d-m-Y H:i'));
    }
}
