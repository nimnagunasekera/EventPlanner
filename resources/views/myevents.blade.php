<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-6">
                    @forelse ($events as $event)
                        @livewire('event-card', [
                            'event' => $event
                        ])
                    @empty
                        <p>No events registered</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
