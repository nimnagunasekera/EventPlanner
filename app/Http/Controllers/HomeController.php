<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    //added invoke method since it will only have one output function
    public function __invoke()
    {
       // Get the current date
       $currentDate = Carbon::now()->toDateString();

       // Retrieve future events with a date greater than today
       $futureEvents = \App\Models\Event::where('date', '>', $currentDate)
           ->orderBy('view_count', 'desc')
           ->paginate(12);

       // Retrieve past events with a date less than or equal to today
       $pastEvents = \App\Models\Event::where('date', '<=', $currentDate)
           ->orderBy('view_count', 'desc')
           ->paginate(12);

       return view('home', [
           'futureEvents' => $futureEvents,
           'pastEvents' => $pastEvents
       ]);
   }

   public function pastEvents()
   {
       // Get the current date
       $currentDate = Carbon::now()->toDateString();

       // Retrieve past events with a date less than or equal to today
       $pastEvents = \App\Models\Event::where('date', '<=', $currentDate)
           ->orderBy('view_count', 'desc')
           ->paginate(12);

       return view('past-events', [
           'pastEvents' => $pastEvents
       ]);
   }
}
