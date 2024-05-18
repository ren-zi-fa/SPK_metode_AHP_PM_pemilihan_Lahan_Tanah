<x-app-layout>
    @section('title', 'Detail')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __(' Detail Rekomendasi') }}
            </h2>

        </div>
    </x-slot>

    @if ( !($is_favorite) )

    <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">
        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ url()->previous()  }}"> Back</a>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @csrf
        <button type="submit"
            class="inline-block text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            <x-eos-star-purple500-o class="flex-shrink-0 w-6 h-6 inline-block me-2" /> Add to favorite
        </button>

    </form>
    @else
    <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">
        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{route('rekomendasi.hasil.index')}}"> Back</a>
        @csrf
        @method('DELETE')
        <button type="submit"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            <x-eos-star-purple500-o class="flex-shrink-0 w-6 h-6 inline-block me-2" />Remove from favorite
        </button>
    </form>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left rtl:text-right text-blue-500 dark:text-blue-600 font-semibold text-sm">
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Tanah
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->name }}
                    </td>

                </tr>
                <tr
                    class="bg-gray-300 border-b dark:bg-gray-400 dark:border-gray-200 hover:bg-gray-400 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                        Details
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->detail }}
                    </td>

                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Perizinan Regulasi
                    </th>
                    <td class="px-6 py-4">
                        @if($product->perizinan_regulasi == 5)
                        Mudah
                        @elseif($product->perizinan_regulasi == 10)
                        Sedang
                        @elseif($product->perizinan_regulasi == 15)
                        Sulit
                        @elseif($product->perizinan_regulasi == 20)
                        Sangat Sulit
                        @endif
                    </td>
                </tr>
                <tr
                    class="bg-gray-300 border-b dark:bg-gray-400 dark:border-gray-200 hover:bg-gray-400 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                        Ketersediaan Air
                    </th>
                    <td class="px-6 py-4">
                        @if($product->ketersediaan_air == 5)
                        Tersedia Sepenuhnya
                        @elseif($product->ketersediaan_air == 10)
                        Tersedia Dengan Baik
                        @elseif($product->ketersediaan_air == 15)
                        Ketersediaan Terbatas
                        @elseif($product->ketersediaan_air == 20)
                        Ketersediaan Terbatas Sekali
                        @endif
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Lokasi
                    </th>
                    <td class="px-6 py-4">
                        @if($product->lokasi == 5)
                        Dekat
                        @elseif($product->lokasi == 10)
                        Agak Jauh
                        @elseif($product->lokasi == 15)
                        Jauh
                        @elseif($product->lokasi == 20)
                        Sangat Jauh
                        @endif
                    </td>
                </tr>
                <tr
                    class="bg-gray-300 border-b dark:bg-gray-400 dark:border-gray-200 hover:bg-gray-400 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                        Potensi Produksi
                    </th>
                    <td class="px-6 py-4">
                        @if($product->potensi_produksi == 5)
                        Sangat Mudah Diakses
                        @elseif($product->potensi_produksi == 10)
                        Mudah Diakses
                        @elseif($product->potensi_produksi == 15)
                        Agak Sulit Diakses
                        @elseif($product->potensi_produksi == 20) Sangat Sulit Diaksess
                        @endif
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Aksesibilitas
                    </th>
                    <td class="px-6 py-4">
                        @if($product->potensi_produksi == 5)
                        Sangat Mudah Diakses
                        @elseif($product->potensi_produksi == 10)
                        Mudah Diakses
                        @elseif($product->potensi_produksi == 15)
                        Agak Sulit Diakses
                        @elseif($product->potensi_produksi == 20) Sangat Sulit Diaksess
                        @endif
                    </td>
                </tr>
                <tr
                    class="bg-gray-300 border-b dark:bg-gray-400 dark:border-gray-200 hover:bg-gray-400 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-800">
                        Kondisi Lingkungan
                    </th>
                    <td class="px-6 py-4">
                        @if($product->kondisi_lingkungan == 5)
                        Baik
                        @elseif($product->kondisi_lingkungan == 10)
                        Cukup
                        @elseif($product->kondisi_lingkungan == 15)
                        Buruk
                        @elseif($product->kondisi_lingkungan == 20)Sangat Buruk
                        @endif
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</x-app-layout>