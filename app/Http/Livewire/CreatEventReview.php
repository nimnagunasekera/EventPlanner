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

    public function save()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $this->validate();

        $this->event->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $this->rating,
            'title' => $this->title,
            'comment' => $this->comment,
        ]);

        $this->emit('reviewAdded');

        $this->reset(['rating', 'title', 'comment']);
    }

    public function render()
    {
        return view('livewire.creat-event-review');
    }
}
