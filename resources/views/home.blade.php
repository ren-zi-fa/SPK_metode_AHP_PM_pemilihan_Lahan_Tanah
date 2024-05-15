
<x-app-layout>
    @section('title', 'Home')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('LATAR BELAKANG') }}
            </h2>

        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 text-center text-white">
        <div
            class="inline-block p-6 bg-indigo-500 border border-gray-200 rounded-lg shadow hover:bg-indigo-600 dark:bg-blue-600 dark:border-gray-700 dark:hover:bg-blue-800 m-auto">
            <h2 class="font-semibold text-lg">Sistem Penunjang Keputusan</h2>
            <h4 class="inline-block">
                Pemilihan Lahan Tanah Menggunakan Metode AHP dan Profile Matching
            </h4>
        </div>
        <div class="card-body p-0 text-red-500 dark:text-white">

            <div class="w-full text-center ">
                <h3 class="p-4 text-justify text-lg ">
                    Alur penggunaan sistem yaitu <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>

                    <strong> Pembobotan antar kriteria menggunakan AHP<svg
                            class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                        Memasukkan nilai preferensi kriteria<svg
                            class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                        Hasil rekomendasi </strong>
                </h3>
            </div>


            <div class="w-full text-center">
                <a href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-4 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Mulai</a>
            </div>

        </div>
    </div>

</x-app-layout>