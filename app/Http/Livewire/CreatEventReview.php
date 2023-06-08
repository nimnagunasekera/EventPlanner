<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatEventReview extends Component
{
    public $event;

    public $rating = 3;

    public $title;

    public $comment;

    public function mount($event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.creat-event-review');
    }
}
