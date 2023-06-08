<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventCard extends Component
{
    public $event;

    public $defaultImage = 'https://source.unsplash.com/collection/22465791/1600x900';

    public function mount($event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event-card');
    }
}
