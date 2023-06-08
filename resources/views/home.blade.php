<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-6 ">
                    @foreach ($events as $event)
                        @livewire('event-card', [
                            'event' => $event
                        ])
                    @endforeach
                </div>

            </div>
            <div class="p-4">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
