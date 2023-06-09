<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-12">
                <x-label for="name" value="{{ __('Category Name') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="category.name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-12">
                <x-label for="description" value="{{ __('Description') }}" />
                <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="category.description" />
                <x-input-error for="description" class="mt-2" />
            </div>

            <div class="col-span-6 mt-4">
                <x-button type="button" wire:click="cancel" class="bg-red-500 hover:bg-red-700">
                    {{ __('Cancel') }}
                </x-button>
            </div>

            <div class="col-span-6 mt-4">
                <x-button type="submit" class="bg-green-500 hover:bg-green-700">
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
