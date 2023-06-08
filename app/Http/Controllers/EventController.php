<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('event.index');
    }

    public function show(Event $event)
    {
        return view('event.show', [
            'event' => $event
        ]);
    }

    public function reservation(Event $event)
    {
        return view('event.reservation', [
            'event' => $event
        ]);
    }
}
