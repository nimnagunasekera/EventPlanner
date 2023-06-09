<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //added invoke method since it will only have one output function
    public function __invoke()
    {

        $events = \App\Models\Event::orderBy('view_count', 'desc')->paginate(12);

        return view('home', [
            'events' => $events
        ]);
    }
}
