<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
             <div {{--class="bg-white overflow-hidden shadow-xl sm:rounded-lg"--}}>

                <div class="flex justify-end m-4">
                    <a href="{{ route('admin.category.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create New Category
                    </a>
                </div>

                <x-table class="table-auto">
                    <x-slot name="head">
                        <x-th sortable>Category</x-th>
                        <x-th sortable>Description</x-th>
                        <x-th sortable>Actions</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($categories as $category)
                            <x-tr>
                                <x-td>{{ $category->name }}</x-td>
                                <x-td>{{ $category->description }}</x-td>
                                <x-td class="justify-center">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mr-1 py-2 px-4 rounded">Edit</a>
                                    @if ($category->events()->exists())
                                    <form class="inline-block" action="{{ route('admin.category.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white font-bold ml-1 py-2 px-4 rounded cursor-not-allowed opacity-50" disabled>Delete</button>
                                    </form>
                                    @else
                                    <form class="inline-block" action="{{ route('admin.category.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-1 py-2 px-4 rounded">Delete</button>
                                    </form>
                                    @endif
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <div class="p-4">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
