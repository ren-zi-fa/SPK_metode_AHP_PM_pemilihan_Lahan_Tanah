<x-app-layout>
    @section('title', 'Presetreference')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Presetrepreference') }}
            </h2>

        </div>
    </x-slot>
    <p>Hello <span class="text-lime-600 text-lg">{{ auth()->user()->name }}</span> , Disini kamu bisa mengatur preferensi yang kamu inginkan</p>
    <div class="mt-4 mb-4">
        @can('product-create')
        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('presetpreferences.create') }} ">
            <x-eos-post-add  class="flex-shrink-0 w-6 h-6 inline-block" /> Create Preset Preferensi
        </a>
        @endcan
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Preferensi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presetpreferences as $key => $presetpreference)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $key+1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $presetpreference->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $presetpreference->detail }}
                    </td>
                   
                    <td class="px-6 py-4">
                        <form action="{{ route('presetpreferences.destroy',$presetpreference->id) }}"  method="POST">
                            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('presetpreferences.show',$presetpreference->id) }}">Detail</a>
                            @can('product-edit')
                            <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('presetpreferences.edit',$presetpreference->id) }}">Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @endforeach
             
               
            </tbody>
       
        </table>
        
    </div>
</x-app-layout>