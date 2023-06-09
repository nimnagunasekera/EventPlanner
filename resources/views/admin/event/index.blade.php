<x-app-layout>

    <div class="py-2">
        <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
             <div {{--class="bg-white overflow-hidden shadow-xl sm:rounded-lg"--}}>

                <div class="flex justify-end m-4">
                    <a href="{{ route('admin.event.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create New Event
                    </a>
                </div>

                <x-table class="table-auto">
                    <x-slot name="head">
                        <x-th sortable>Event Name</x-th>
                        <x-th sortable>Image</x-th>
                        <x-th sortable>Category</x-th>
                        <x-th sortable>Date</x-th>
                        <x-th sortable>Time</x-th>
                        {{-- <x-th sortable>Duration</x-th> --}}
                        <x-th sortable>Venue</x-th>
                        <x-th sortable>Address</x-th>
                        <x-th sortable>City</x-th>
                        <x-th sortable>Price</x-th>
                        <x-th sortable>Actions</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($events as $event)
                            <x-tr>
                                <x-td>
                                    <a href="{{ route('event.show', $event->id) }}">
                                        {{ $event->event_name }}
                                    </a>
                                </x-td>
                                <x-td>
                                    @if ($event->hasMedia('image'))
                                    <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->name }}">
                                    @else
                                        <div class="text-center">-</div>
                                    @endif
                                </x-td>
                                <x-td>{{ $event->category->name }}</x-td>
                                <x-td>{{ $event->date }}</x-td>
                                <x-td>{{ $event->time }}</x-td>
                                {{-- <x-td>{{ $event->duration }}</x-td> --}}
                                <x-td>{{ $event->venue_name }}</x-td>
                                <x-td>{{ $event->address }}</x-td>
                                <x-td>{{ $event->city }}</x-td>
                                <x-td>{{ $event->price }}</x-td>
                                <x-td class="justify-center">
                                    <a href="{{ route('admin.event.edit', $event->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mr-1 py-2 px-4 rounded">Edit</a>
                                    <form class="inline-block" action="{{ route('admin.event.destroy', $event) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-1 py-2 px-4 rounded">Delete</button>
                                    </form>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <div class="p-4">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
