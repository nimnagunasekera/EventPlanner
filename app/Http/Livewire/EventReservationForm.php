<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class EventReservationForm extends Component
{
    public $event;

    public $user;

    public Reservation $reservation;

    protected $rules = [
        'reservation.first_name' => 'required',
        'reservation.last_name' => 'required',
        'reservation.email' => 'required|email',
        'reservation.phone' => 'required',
        'reservation.address' => 'required',
        'reservation.city' => 'required',
        'reservation.province' => 'required',
        'reservation.postal_code' => 'required',
        'reservation.card_number' => 'required',
    ];

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
