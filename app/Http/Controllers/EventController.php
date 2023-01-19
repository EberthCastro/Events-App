<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //show all events
    public function index() {
        return view('events.index', [
        
            // 'events' => Event::all()
            'events' => Event::latest()->filter(request(['tag']))->get()
        ]);
    }

    //show single event
    public function show(Event $event) {
        return view('events.show', [
            'event' => $event
        ]);
    }
}
