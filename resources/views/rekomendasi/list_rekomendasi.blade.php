<x-app-layout>
    @section('title', 'List-Rekomendasi')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Berikut hasil rekomendasi produk berdasarkan bobot kriteria dan nilai preferensi yang Anda
                masukkan') }}
            </h2>

        </div>
    </x-slot>

    <div id="accordion-color" data-accordion="collapse"
        data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
        <h2 id="accordion-color-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                aria-controls="accordion-color-body-1">
                <span> Input Bobot Antar Kriteria</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <div class="relative overflow-x-auto shadow-md ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C1
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Harga
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_harga * 100
                                    ,0,",",".") . ' %' }}
                                </td>

                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C2
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Perizinan Regulasi
                                </td>
                                <td class="px-6 py-4">
                                    {{number_format($bobotKriteriaDanPreferensiKriteria->bobot_perizinan_regulasi * 100
                                    ,0,",",".") . ' %'}}
                                </td>

                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C3
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Ketersediaan Air
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_ketersediaan_air * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C4
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Lokasi
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_lokasi * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C5
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Potensi penduduk
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_potensi_produksi * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C6
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Aksesibilitas
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_aksesibilitas *
                                    100 ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C7
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Kondisi Lingkungan
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_kondisi_lingkungan * 100
                                    ,0,",",".") . ' %'
                                    }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @php
        $kriteria = $bobotKriteriaDanPreferensiKriteria;
        function isNumber($str)
        {
        if ($str == trim($str) && strpos($str, ' ') !== false) {
        // echo 'has spaces, but not at beginning or end';
        return false;
        } else { return true;}
        }
        function isKriteriaDiabaikan($str)
        {
        if ($str === 'Kriteria Diabaikan') {return true;} else { return false; }
        }
        function isDiabaikan($str)
        {
        if ($str === 'Kriteria Diabaikan') {$str = '-'; return $str;} else { return $str;}
        }
        @endphp
        <h2 id="accordion-color-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                aria-controls="accordion-color-body-3">
                <span>Input Preferensi Kriteria Produk</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <div class="relative overflow-x-auto shadow-md ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C1
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Harga
                                </td>
                                <td class="px-6 py-4">
                                    @if(isNumber($kriteria->pref_harga))Rp{{
                                    number_format($kriteria->pref_harga,0,",",".") }}
                                    @else {{ isDiabaikan($kriteria->pref_harga) }} @endif
                                </td>

                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C2
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Perizinan Regulasi
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_perizinan_regulasi == 50)
                                    {{ isDiabaikan("Mudah") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 100)
                                    {{ isDiabaikan("Sedang") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 150)
                                    {{ isDiabaikan("Sulit") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 200)
                                    {{ isDiabaikan("Sangat Sulit") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_perizinan_regulasi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_perizinan_regulasi)))
                                    @endif
                                </td>

                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C3
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Ketersediaan Air
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_ketersediaan_air == 50)
                                    {{ isDiabaikan("Tersedia Sepenuhnya") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 100)
                                    {{ isDiabaikan("Tersedia Dengan Baik") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 150)
                                    {{ isDiabaikan("Ketersediaan Terbatas") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 200)
                                    {{ isDiabaikan("Ketersediaan Terbatas Sekali") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_ketersediaan_air) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_ketersediaan_air)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C4
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Lokasi
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_lokasi == 50)
                                    {{ isDiabaikan("Dekat Agak Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 100)
                                    {{ isDiabaikan("Agak Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 150)
                                    {{ isDiabaikan("Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 200)
                                    {{ isDiabaikan("Sangat Jauh") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_lokasi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_lokasi)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C5
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Potensi penduduk
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_potensi_produksi == 50)
                                    {{ isDiabaikan("Produktif") }}
                                    @elseif($kriteria->pref_potensi_produksi == 100)
                                    {{ isDiabaikan("Stabil") }}
                                    @elseif($kriteria->pref_potensi_produksi == 150)
                                    {{ isDiabaikan("Menengah") }}
                                    @elseif($kriteria->pref_potensi_produksi == 200)
                                    {{ isDiabaikan("Rendah") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_potensi_produksi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_potensi_produksi)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C6
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Aksesibilitas
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_aksesibilitas == 50)
                                    {{ isDiabaikan("Sangat Mudah Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 100)
                                    {{ isDiabaikan("Mudah Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 150)
                                    {{ isDiabaikan("Agak Sulit Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 200)
                                    {{ isDiabaikan("Sangat Sulit Diakses") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_aksesibilitas) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_aksesibilitas)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C7
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Kondisi Lingkungan
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_kondisi_lingkungan == 50)
                                    {{ isDiabaikan("Baik") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 100)
                                    {{ isDiabaikan("Cukup") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 150)
                                    {{ isDiabaikan("Buruk") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 200)
                                    {{ isDiabaikan("Sangat Buruk") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_kondisi_lingkungan) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_kondisi_lingkungan)))
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>