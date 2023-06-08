<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatEventReview extends Component
{
    public $event;

    public $rating = 3;

    public $title;

    public $comment;

    //create validations
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'title' => 'required|min:10',
        'comment' => 'required|min:30',
    ];

    public function mount($event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.creat-event-review');
    }
}
