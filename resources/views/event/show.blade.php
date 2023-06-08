<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <!-- component -->
            <div class="mx-auto max-w-7xl border border-grey rounded-lg shadow ">
                <div class="relative z-10 lg:w-full lg:max">
                    <section class="bg-cover bg-center py-32 w-full h-f" style="background-image: url('{{ $event->getFirstMediaUrl('image', 'thumb') }}'); background-size: 1200px 320px;">
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
                    <div class="pt-5">
                        <h3 class="text-lg font-medium leading-7 text-gray-900">Post A Review</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Write about your experince during your stay</p>
                        <form action="#" class="relative bg-white pt-4">
                            <div
                                class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" name="title" id="title"
                                    class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                                    placeholder="Title">
                                <label for="description" class="sr-only">Description</label>
                                <textarea rows="6" name="description" id="description"
                                    class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Write a description..."></textarea>

                                <!-- Spacer element to match the height of the toolbar -->
                                <div aria-hidden="true">
                                    <div class="py">
                                        <div class="h-9"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="flex  space-x-3 py-2">
                                <div class="flex-shrink-0">
                                    <button type="submit"
                                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post Your Review</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




</x-app-layout>
