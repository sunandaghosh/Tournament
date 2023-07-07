<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index($tournamentId)
    {
        // Get the tournament
        $tournament = Tournament::findOrFail($tournamentId);
        
        // Get all events for the tournament
        $events = $tournament->events;

        // Pass the events to the view
        return view('event.index', compact('tournament', 'events'));
    }

    public function show($tournamentId, $eventId)
    {
        // Get the tournament
        $tournament = Tournament::findOrFail($tournamentId);
        
        // Get the event
        $event = Event::findOrFail($eventId);

        // Pass the tournament and event to the view
        return view('event.show', compact('tournament', 'event'));
    }
}
