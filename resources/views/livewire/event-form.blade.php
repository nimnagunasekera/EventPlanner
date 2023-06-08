<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-3">
                <x-label for="category_id" value="{{ __('Category') }}" />
                <select id="category_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                    wire:model="event.category_id">
                    <option value="">Select a category</option>
                    @foreach ($category as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="category_id" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="image" value="{{ __('Image') }}" />
                <x-input id="image" type="file" class="mt-1 block w-full" wire:model="image" />
                <x-input-error for="image" class="mt-2" />
            </div>

            {{-- <div class="col-span-6">
                <label for="image" class="block text-sm font-medium text-gray-700">{{ __('Image') }}</label>
                <div class="mt-1 flex items-center">
                    <label for="image" class="px-4 py-2 bg-white text-sm rounded-md border border-gray-400 cursor-pointer hover:bg-gray-100">
                        <span class="text-blue-600">Choose File</span>
                        <input id="image" type="file" class="hidden" wire:model="image" />
                    </label>
                    <span id="file-name" class="ml-2 text-sm text-gray-500"></span>
                </div>
                <x-input-error for="image" class="mt-2 text-red-500" />
            </div> --}}

            <div class="col-span-6">
                <x-label for="event_name" value="{{ __('Event Name') }}" />
                <x-input id="event_name" type="text" class="mt-1 block w-full" wire:model="event.event_name" />
                <x-input-error for="event_name" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="date" value="{{ __('Date') }}" />
                <x-input id="date" type="text" class="mt-1 block w-full" wire:model="event.date" />
                <x-input-error for="date" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="time" value="{{ __('Time') }}" />
                <x-input id="time" type="text" class="mt-1 block w-full" wire:model="event.time" />
                <x-input-error for="time" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="duration" value="{{ __('Duration') }}" />
                <x-input id="duration" type="text" class="mt-1 block w-full" wire:model="event.duration" />
                <x-input-error for="duration" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="venue_name" value="{{ __('Venue Name') }}" />
                <x-input id="venue_name" type="text" class="mt-1 block w-full" wire:model="event.venue_name" />
                <x-input-error for="venue_name" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="about" value="{{ __('About') }}" />
                <x-textarea id="about" type="text" class="mt-1 block w-full" wire:model="event.about" />
                <x-input-error for="about" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" type="text" class="mt-1 block w-full" wire:model="event.address" />
                <x-input-error for="address" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="city" value="{{ __('City') }}" />
                <x-input id="city" type="text" class="mt-1 block w-full" wire:model="event.city" />
                <x-input-error for="city" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="price" value="{{ __('Price') }}" />
                <x-input id="price" type="text" class="mt-1 block w-full" wire:model="event.price" />
                <x-input-error for="price" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-button type="submit" class="bg-green-500 hover:bg-green-700">
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
