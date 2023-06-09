<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold leading-6 text-gray-900">
                        Users
                    </h1>
                    <p class="my-2 text-sm text-gray-700">
                        A list of all the users in the system.
                    </p>
                </div>

            <x-table class="mx-auto sm:px-6 lg:px-8 flex justify-center">
                <x-slot name="head">
                    <x-th class="w-[300px]">User Name</x-th>
                    <x-th class="w-[300px]">First Name</x-th>
                    <x-th class="w-[300px]">Last Name</x-th>
                    <x-th class="w-[300px]">Email</x-th>
                    <x-th class="w-[300px]">Phone</x-th>
                    <x-th class="w-[300px]">Address</x-th>
                    <x-th class="w-[300px]">Registered Date</x-th>
                </x-slot>
                <x-slot name="body">

                    @foreach ($users as $user)
                        <x-tr>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 w-[300px] text-left">{{ $user->name }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->first_name }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->last_name }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->email }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->phone }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->address }}</x-td>
                            <x-td class=" py-4 px-6 text-sm text-gray-600 border w-[300px] text-left">{{ $user->created_at->format('d/m/Y h:ia') }}</x-td>
                        </x-tr>
                    @endforeach
                </x-slot>
            </x-table>
        </div>
    </div>
</x-app-layout>
