<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-100 border-rounded">

            <x-splade-form class="space-y-4" action="{{route('users.store')}}" >
                <x-splade-input name="name" label="name" />
                <x-splade-input name="email" type="email" label="email" />
                <x-splade-input name="password" type="password"  label="password"/>
                <x-splade-submit label="submit" :spinner="true"  class="mt-2"/>
            </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>
