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
                    <h2 class="text-2xl">Reviews</h2>
                    <div class="mt-6 space-y-10 divide-y divide-gray-200 border-b border-gray-200 pb-10 hover:bg-gray-50">
                        <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8 ">
                            <div
                                class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">
                                <div class="flex items-center xl:col-span-1">
                                    <div class="flex items-center">
                                        <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">5
                                        <span > out of 5 stars</span>
                                    </p>
                                </div>

                                <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                                    <h3 class="text-sm font-medium text-gray-900">Can&#039;t say enough good things</h3>

                                    <div class="mt-3 space-y-6 text-sm text-gray-500">
                                        <p>I was really pleased with the overall shopping experience. My order even
                                            included a little personal, handwritten note, which delighted me!</p>
                                        <p>The product quality is amazing, it looks and feel even better than I had
                                            anticipated. Brilliant stuff! I would gladly recommend this store to my
                                            friends. And, now that I think of it... I actually have, many times!</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex items-center text-sm lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:flex-col lg:items-start xl:col-span-3">
                                <p class="font-medium text-gray-900">Risako M</p>
                                <time datetime="2021-01-06"
                                    class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                                    16, 2021</time>
                            </div>
                        </div>
                    </div>
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
