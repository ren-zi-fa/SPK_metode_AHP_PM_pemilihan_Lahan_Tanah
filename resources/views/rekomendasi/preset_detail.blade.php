<x-app-layout>
    @section('title', 'Detail Preset')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Show Preset Preference') }}
            </h2>

        </div>
    </x-slot>
    <div class="grid grid-cols-2 w-1/2">
        <a href="{{ route('rekomendasi.list_preset') }}"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Back
        </a>
        <a href="{{ route('rekomendasi.preset.use',$presetpreference->id) }}"
            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Gunakan Preset
        </a>
    </div>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
       
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Preset Preference Name
                </th>
                <td class="px-6 py-4">
                    {{ $presetpreference->name }}
                </td>
              
            </tr>
            <tr class="bg-gray-300 border-b dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                    Details
                </th>
                <td class="px-6 py-4">
                    {{ $presetpreference->detail }}
                </td>
                
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Harga
                </th>
                <td class="px-6 py-4">
                    Rp{{ $presetpreference->harga }}
                </td>           
            </tr>
            <tr class="bg-gray-300 border-b dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                    Perizinan Regulasi
                </th>
                <td class="px-6 py-4">
                    @if($presetpreference->perizinan_regulasi == 50)
                    Mudah
                @elseif($presetpreference->perizinan_regulasi == 100)
                    Sedang
                @elseif($presetpreference->perizinan_regulasi == 150)
                     Sulit
                @elseif($presetpreference->perizinan_regulasi == 200)
                    Sangat Sulit
                @endif
                </td>           
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Ketersediaan Air
                </th>
                <td class="px-6 py-4">
                   @if($presetpreference->ketersediaan_air == 50)
                    Tersedia Sepenuhnya
                @elseif($presetpreference->ketersediaan_air == 100)
                    Tersedia Dengan Baik
                @elseif($presetpreference->ketersediaan_air == 150)
                     Ketersediaan Terbatas
                @elseif($presetpreference->ketersediaan_air == 200)
                    Ketersediaan Terbatas Sekali
                @endif
                </td>           
            </tr>
            <tr class="bg-gray-300 border-b dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                    Lokasi
                </th>
                <td class="px-6 py-4">
                    @if($presetpreference->lokasi == 50)
                    Dekat
                @elseif($presetpreference->lokasi == 100)
                    Agak Jauh
                @elseif($presetpreference->lokasi == 150)
                     Jauh
                @elseif($presetpreference->lokasi == 200)
                   Sangat  Jauh 
                @endif
                </td>           
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Potensi Produksi
                </th>
                <td class="px-6 py-4">
                    @if($presetpreference->potensi_produksi == 50)
                    Produktif
                @elseif($presetpreference->potensi_produksi == 100)
                    Stabil
                @elseif($presetpreference->potensi_produksi == 150)
                     Menengah 
                @elseif($presetpreference->potensi_produksi == 200)
                   Rendah 
                @endif
                </td>           
            </tr>
            <tr class="bg-gray-300 border-b dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                    Aksesibilitas
                </th>
                <td class="px-6 py-4">
                    @if($presetpreference->potensi_produksi == 50)
                    Sangat Mudah Diakses
                @elseif($presetpreference->potensi_produksi == 100)
                    Mudah Diakses
                @elseif($presetpreference->potensi_produksi == 150)
                    Agak Sulit Diakses
                @elseif($presetpreference->potensi_produksi == 200)
                    Sangat Sulit Diaksess
                @endif
                </td>           
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Kondisi Lingkungan
                </th>
                <td class="px-6 py-4">
                    @if($presetpreference->kondisi_lingkungan == 50)
                    Baik
                @elseif($presetpreference->kondisi_lingkungan == 100)
                    Cukup
                @elseif($presetpreference->kondisi_lingkungan == 150)
                   Buruk
                @elseif($presetpreference->kondisi_lingkungan == 200)
                    Sangat Buruk
                
                @endif
                </td>           
            </tr>
        </tbody>
    </table>
</div>

</x-app-layout>