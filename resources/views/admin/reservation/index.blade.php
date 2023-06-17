<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold leading-6 text-gray-900">
                        Registrations
                    </h1>
                    <p class="my-2 text-sm text-gray-700">
                        A list of all the event registrations in the system.
                    </p>
                </div>

            <x-table class="mx-auto sm:px-6 lg:px-8 flex justify-center">
                <x-slot name="head">
                    <x-th class="w-[300px]">Event Name</x-th>
                    <x-th class="w-[300px]">First Name</x-th>
                    <x-th class="w-[300px]">Last Name</x-th>
                    <x-th class="w-[300px]">Email</x-th>
                    <x-th class="w-[300px]">Phone</x-th>
                    <x-th class="w-[300px]">Address</x-th>
                    <x-th class="w-[300px]">Registered Date</x-th>
                </x-slot>
                <x-slot name="body">

                    @foreach ($reservations as $reservation)
                        <x-tr>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 w-[300px] text-left">
                                <a href="{{ route('event.show', $reservation->event->id) }}">
                                {{ $reservation->event->event_name }}
                                </a>
                            </x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->first_name }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->last_name }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->email }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->phone }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->address }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $reservation->created_at->format('d/m/Y h:ia') }}</x-td>
                        </x-tr>
                    @endforeach
                </x-slot>
            </x-table>
        </div>
    </div>
</x-app-layout>
