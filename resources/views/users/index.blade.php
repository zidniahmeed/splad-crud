<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users') }}
        </h2>
    </x-slot>
    <div class="py-12">
    

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <Link href="/users/create" class="p-4 bg-green-500 text-white hover:bg-green-300">Create</Link>
                    <x-splade-table :for="$users" />
                </div>
        </div>
</x-app-layout>
