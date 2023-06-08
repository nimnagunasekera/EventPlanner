<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('event.index');
    }

    public function show($id)
    {
        return view('event.show', [
            'event' => $id
        ]);
    }

    public function reservation($id)
    {
        return view('event.reservation', [
            'reserve' => $id
        ]);
    }
}
