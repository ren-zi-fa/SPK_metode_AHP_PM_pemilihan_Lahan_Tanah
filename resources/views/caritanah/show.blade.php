<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Detail ') }}
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
            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">
            <x-eos-stars class="flex-shrink-0 h-5 w-5 inline-block" />Add to favorite
        </button>

    </form>
    @else
    <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">

        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('myfavorites.index') }}"> Back</a>
        @csrf
        @method('DELETE')
        <button type="submit"
            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
            <x-eos-stars class="flex-shrink-0 h-5 w-5 inline-block" /> Remove from favorite
        </button>

    </form>
    @endif
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="px-6 py-3"><strong>Product Name</strong></td>
                <td scope="col" class="px-6 py-3">{{ $product->name }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="px-6 py-3"><strong>Details</strong></td>
                <td scope="col" class="px-6 py-3">{{ $product->detail }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="px-6 py-3"><strong>Harga</strong></td>
                <td scope="col" class="px-6 py-3"> Rp{{ $product->harga }}</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="px-6 py-3"><strong>Perizinan Regulasi</strong> </td>
                <td scope="col" class="px-6 py-3">
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
                <td scope="col" class="px-6 py-3"> <strong>Ketersediaan Air</strong></td>
                <td scope="col" class="px-6 py-3">
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
                <td scope="col" class="px-6 py-3"><strong>Lokasi</strong></td>
                <td scope="col" class="px-6 py-3">
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
                <td scope="col" class="px-6 py-3"><strong>Potensi Produksi</strong></td>
                <td scope="col" class="px-6 py-3">
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
                <td scope="col" class="px-6 py-3"><strong>Aksesibilitas</strong></td>
                <td scope="col" class="px-6 py-3">
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
                <td scope="col" class="px-6 py-3"><strong>Kondisi Lingkungan</strong></td>
                <td scope="col" class="px-6 py-3">
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