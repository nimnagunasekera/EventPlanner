<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event?->id ? 'Edit'. $event->event_name : 'Create New Event'}} Event
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('event-form', ['event' => $event])
            </div>
        </div>
    </div>

</x-app-layout>
