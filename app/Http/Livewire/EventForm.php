<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EventForm extends Component
{
    use WithFileUploads;

    public $event;

    public $category;

    public $image;

    // validation rules
    protected $rules = [
        'event.category_id' => 'required',
        'event.event_name' => 'required',
        'event.date' => 'required',
        'event.time' => 'required',
        'event.duration' => 'required',
        'event.about' => 'required',
        'event.venue_name' => 'required',
        'event.address' => 'required',
        'event.city' => 'required',
        'event.price' => 'required',
        // 'event.image' => 'required',
    ];

    public function mount($event)
    {
        $this->event = $event;

        $this->category = \App\Models\Category::all();
    }

    public function submit()
    {
        $this->validate();

        $this->event->save();

        //check if there is an image
        //if so, add it to the event
        if ($this->image) {

            //clear the media collection
            $this->event->clearMediaCollection('image');

            //add the image to the media collection
            $this->event->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }

        return redirect()->route('admin.event.index');
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
