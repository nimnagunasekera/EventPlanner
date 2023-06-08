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

    public function createReservation(){
        $this->validate();

        $this->reservation->user_id = $this->user->id;

        $this->reservation->event_id = $this->event->id;

        $this->reservation->save();

        $this->emit('reservationCreated');

        //redirect user to the event page
        return redirect()->route('event.show', $this->event->id);
    }

    public function render()
    {
        return view('livewire.event-reservation-form');
    }
}
