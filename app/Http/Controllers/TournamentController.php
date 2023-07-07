<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    //

    public function create()
    {
        // Display the create tournament form
        return view('tournament.create');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'tournament_name' => 'required',
            'sports_type' => 'required',
            'tournament_date' => 'required|date',
            'template' => 'required',
            'event_type' => 'required|array',
        ]);

        // Create a new tournament record
        $tournament = new Tournament;
        $tournament->name = $validatedData['tournament_name'];
        $tournament->sports_type = $validatedData['sports_type'];
        $tournament->date = $validatedData['tournament_date'];
        $tournament->template = $validatedData['template'];
        $tournament->event_types = $validatedData['event_type'];
        $tournament->save();

        // Redirect to a success page or do something else
        return redirect('/tournament/'.$tournament->id);
    }
}
