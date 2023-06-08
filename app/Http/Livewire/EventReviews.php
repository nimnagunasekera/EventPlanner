<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventReviews extends Component
{
    public $event;

    public function mount($event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event-reviews');
    }
}
