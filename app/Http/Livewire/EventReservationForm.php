<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class EventReservationForm extends Component
{
    public $event;

    public $user;

    public Reservation $reservation;

    public function mount($event)
    {
        $this->event = $event;
        $this->user = auth()->user();
        $this->reservation = new Reservation();
    }

    public function render()
    {
        return view('livewire.event-reservation-form');
    }
}
