<x-app-layout>
    @section('title', 'Detail')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Product Detail') }}
            </h2>

        </div>
    </x-slot>
</x-app-layout>