<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <!-- component -->
            @if (session('message'))

            {{-- <div
                x-data="{ show: 1 }"
                x-on:close.stop="show = false"
                x-on:keydown.escape.window="show = false"
                x-show="show"
                id="one"
                class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                style="display: none;">
                <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-md sm:mx-auto"
                            x-trap.inert.noscroll="show"
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                </div>
            </div> --}}

                    <script>
                        Swal.fire(
                        'Thank you!',
                        '{{ session('message') }}',
                        'success'
                        );
                    </script>
                @endif
            <div class="mx-auto max-w-7xl border border-grey rounded-lg shadow ">
                <div class="relative z-10 lg:w-full lg:max">
                    <section class="bg-cover bg-center py-32 w-full h-f" style="background-image: url('{{ $event->hasMedia('image') ? $event->getFirstMediaUrl('image', 'thumb') : 'https://source.unsplash.com/collection/22465791/1600x900' }}'); background-size: 1200px 320px;">
                        <div class="mx-auto max-w-3xl text-center">
                            <div class="inline-block bg-black bg-opacity-20 rounded-lg">
                                <h1 class="px-2 py-2 text-white text-5xl font-medium">{{ $event->event_name }}</h1>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- This is an example component -->
            <div class="bg-white">
                <div >
                    <div class="p-4 ">
                        <h2 class="text-2xl ">
                            Event Details
                        </h2>
                    </div>

                    <div class="px-4 border-b">
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 pb-4 border-b">
                            <p>
                                Event Name
                            </p>
                            <p class="text-gray-600">
                                {{ $event->event_name }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p>
                                Date
                            </p>
                            <p class="text-gray-600">
                                    {{ $event->date }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p >
                                Time
                            </p>
                            <p class="text-gray-600">
                                {{ $event->time }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p >
                                Duration
                            </p>
                            <p class="text-gray-600">
                                {{ $event->duration }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p >
                                Category
                            </p>
                            <p class="text-gray-600">
                                {{ $event->category->name }}
                            </p>
                        </div>
                        {{-- <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p >
                                Tags
                            </p>
                            @foreach ($event->categories as $category)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div> --}}
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 ">
                            <p>
                                Description
                            </p>
                            <p class="text-gray-600">
                                {{ $event->about }}
                            </p>
                        </div>
                    </div>
                </div>

                <div >
                    <div class="p-4">
                        <h2 class="text-2xl ">
                            Venue Details
                        </h2>
                    </div>

                    <div class="px-4 border-b">
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 pb-4 border-b">
                            <p>
                                Venue Name
                            </p>
                            <p class="text-gray-600">
                                {{ $event->venue_name }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p>
                                Address
                            </p>
                            <p class="text-gray-600">
                                {{ $event->address }}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                            <p >
                                City
                            </p>
                            <p class="text-gray-600">
                                {{ $event->city }}
                            </p>
                        </div>
                        {{-- <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 ">
                            <p>
                                Additional Details
                            </p>
                            <p class="text-gray-600">
                                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                            </p>
                        </div> --}}
                    </div>
                </div>

                <div >
                    <div class="px-4">
                            <h2 class="pt-4 text-2xl">
                                Registration and Pricing
                            </h2>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-4 border-b">
                                <p >
                                    Price Per Ticket
                                </p>
                                <p class="text-gray-600">
                                    Rs. {{ $event->price }}
                                </p>
                            </div>
                        <div class="grid py-4 relative">
                            <a href="{{ route('event.reservation', 1) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 place-self-center">
                                Register For Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            </div>

        </div>

        <div class="max-w-7xl mx-auto mt-5 sm:px-6 lg:px-8 relative">
            <!-- component -->
            <div class="mx-auto max-w-7xl border border-grey rounded-lg shadow ">
                <div class="p-4 bg-white">
                    @livewire('event-reviews', [
                        'event' => $event
                    ])
                    @auth
                    @livewire('creat-event-review', [
                        'event' => $event
                    ])
                    @endauth
                    @guest
                    <div class="mt-6 mb-5">
                        <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-lg font-medium text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 place-self-center">
                            Login to Leave a Review
                        </a>
                    @endguest
                </div>
            </div>
        </div>

    </div>




</x-app-layout>
