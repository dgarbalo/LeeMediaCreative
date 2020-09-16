<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dropdown') }}
    </h2>
</x-slot>

<div class="md:flex md:justify-center">
    <div
        x-data="{open : false}"
        @click.away="open = false"
        @keydown.escape="open = false"
        class="py-4 px-4 rounded-lg bg-gray-100 grid grid-cols-1 md:w-1/2"
    >
        <h2 class="text-blue-900 text-xl font-bold px-4">
            User Search
        </h2>
        <div @click="open = !open" class="mt-1 mb-3 flex rounded-md shadow-sm ">
            <div class="relative flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none ">
                    <x-heroicon-o-search class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"/>
                </div>
                <input
                    @keydown="open = true"
                    wire:model="search"
                    id="search"
                    class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                    placeholder="Search..."
                    autocomplete="off"
                >
            </div class="">
            <button class=" bg-cool-gray-600 -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 hover:text-gray-500 hover:bg-cool-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <x-heroicon-o-chevron-down x-show="!open" class="h-5 w-5 text-white" viewBox="0 0 24 24" />
                <x-heroicon-o-chevron-up x-show="open" class="h-5 w-5 text-white" viewBox="0 0 24 24" />
            </button>
        </div>

        <div
            x-show="open"
            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-end="opacity-0 transform -translate-y-3"
            class="grid grid-cols-1 rounded-md border border-cool-gray-600 bg-white"
        >
            @if ($users->count())
                @foreach ($users as $user)
                    <div @click="open = false">
                        <form action="" method="GET">
                            <button type="submit" class="hover:bg-gray-500 flex w-full py-2 px-4 text-sm" value="{{ $user->name }}">
                                {{ $user->name }}
                            </button>
                            <input type="text" id="plan_name" name="plan_name" class="hidden" value="{{ $user->name }}" />
                        </form>
                    </div>
                @endforeach
            @else
            <div class="bg-gray-500 py-2 px-4 text-white">

                No results for "{{ $search }}". Please try another search.
            </div>
            @endif

        </div>
    </div>
</div>
