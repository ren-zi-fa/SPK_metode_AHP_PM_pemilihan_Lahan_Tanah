<x-app-layout>
    @section('title','Create Ahp')

    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Add New AHP Calculation') }}
            </h2>

        </div>
    </x-slot>
    <form id="productCreateForm" action="{{ route('user.bobot.ahp.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap">
            <div class="">
                <a href="{{ route('user.bobot.ahp.index') }}"
                    class=" text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 inline-block">
                    Back
                </a>
                <noscript>
                    <input type="submit" value="Submit form!" />
                </noscript>
            </div>
            <div class="">
                <button type="submit"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Submit
                </button>
            </div>
            <div class="">
                <x-units.dropdown-acuan/>
            </div>
          
        </div>
        <div class="grid grid-cols-2 gap-4">

         <x-units.dropdown-kriteria/>

            <div
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h2 class="text-center">Detail Perhitungan</h2>
                <div class="py-4 px-2">
                    <div class="mb-4">
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perhitungan</label>
                        <input type="text" id="first_name" name="nama_perhitungan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Perhitungan" value="" required />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail</label>
                        <input type="text" name="detail" id="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsi" value="" required />
                    </div>

                    <div>
                    </div>

                </div>

            </div>
        </div>
 <x-units.table-perbandingan/>      
 </form>
</x-app-layout>