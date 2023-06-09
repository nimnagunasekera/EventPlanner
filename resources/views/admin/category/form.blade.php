<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $category?->id ? 'Edit'. $category->name : 'Create New Category'}} Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('category-form', ['category' => $category])
            </div>
        </div>category
    </div>

</x-app-layout>
