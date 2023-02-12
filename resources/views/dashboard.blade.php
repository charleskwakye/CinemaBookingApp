<x-cinema-layout>
    <x-slot name="description">dashboard</x-slot>
    <x-slot name="title">{{auth()->user()->first_name." ".auth()->user()->last_name}}'s Dashboard</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome/>
            </div>
        </div>
    </div>
</x-cinema-layout>
