<x-app-layout>
    @section('title', 'Product')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Product Detail') }}
            </h2>

        </div>
    </x-slot>
    <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        href="{{ route('products.index') }}}"> Back</a>
    <a href="{{ route('products.edit',$product->id) }}"
        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>
    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Product Name</strong></td>
                <td  class="px-6 py-3">{{ $product->name }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Details</strong></td>
                <td  class="px-6 py-3">{{ $product->detail }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Harga</strong></td>
                <td  class="px-6 py-3"> Rp{{ $product->harga }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Perizinan Regulasi</strong> </td>
                <td  class="px-6 py-3">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Ketersediaan Air</strong></td>
                <td  class="px-6 py-3">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Lokasi</strong></td>
                <td  class="px-6 py-3">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Potensi Produksi</strong></td>
                <td  class="px-6 py-3">
                    @if($product->potensi_produksi == 5)
                    Produktif
                    @elseif($product->potensi_produksi == 10)
                    Stabil
                    @elseif($product->potensi_produksi == 15)
                    Menengah
                    @elseif($product->potensi_produksi == 20)
                    Rendah
                    @endif
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td  class="px-6 py-3"><strong>Aksesibilitas</strong></td>
                <td  class="px-6 py-3">
                    @if($product->potensi_produksi == 5)
                    Sangat Mudah Diakses
                    @elseif($product->potensi_produksi == 10)
                    Mudah Diakses
                    @elseif($product->potensi_produksi == 15)
                    Agak Sulit Diakses
                    @elseif($product->potensi_produksi == 20)
                    Sangat Sulit Diaksess
                    @endif
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td width='30%' ><strong>Kondisi Lingkungan</strong></td>
                <td  class="px-6 py-3">
                    @if($product->kondisi_lingkungan == 5)
                    Baik
                    @elseif($product->kondisi_lingkungan == 10)
                    Cukup
                    @elseif($product->kondisi_lingkungan == 15)
                    Buruk
                    @elseif($product->kondisi_lingkungan == 20)
                    Sangat Buruk
                    @endif
                </td>
            </tr>
        </table>
    </div>
</x-app-layout>