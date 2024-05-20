<x-app-layout>
    @section('title', 'Product')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit Product') }}

            </h2>
        </div>

    </x-slot>
    <form id="productEditForm" action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2y"
            href="{{ route('products.index') }}"> Back</a>
        <noscript>
            <input type="submit" value="Submit form!" />
        </noscript>
    <button type="submit"
        class="inline-block text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
    <div
        class="block max-w-sm p-6 bg-white mt-5 mx-auto border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">


            <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Name" required>
                </div>
            </div>
            <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="number" name="harga" value="{{ $product->harga }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Harga" min=0 max="200000000" required>
                </div>
            </div>
            <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Perizinan Regulasi: </strong>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="perizinan_regulasi">
                        <option value="5" {{ $product->perizinan_regulasi == 5? 'selected' : '' }}>Mudah
                        </option>
                        <option value="10" {{ $product->perizinan_regulasi == 10 ? 'selected' : '' }}>Sedang
                        </option>
                        <option value="15" {{ $product->perizinan_regulasi == 15 ? 'selected' : '' }}>Sulit
                        </option>
                        <option value="20" {{ $product->perizinan_regulasi == 20 ? 'selected' : '' }}>Sangat
                            Sulit</option>
                    </select>
                </div>
            </div>
            <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Ketersediaan Air:</strong>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="ketersediaan_air">
                        <option value="5" {{ $product->ketersediaan_air == 5? 'selected' : '' }}>Tersedia
                            Sepenuhnya</option>
                        <option value="10" {{ $product->ketersediaan_air == 10 ? 'selected' : '' }}>Tersedia
                            Dengan Baik</option>
                        <option value="15" {{ $product->ketersediaan_air == 15 ? 'selected' : '' }}>Ketersediaan
                            Terbatas</option>
                        <option value="20" {{ $product->ketersediaan_air == 20 ? 'selected' : '' }}>Ketersediaan
                            Terbatas Sekali</option>
                    </select>
                </div>
            </div>



            <div class="column">
                <div class="px-4 py-3">

                    <div class="form-group">
                        <strong>Lokasi:</strong>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="lokasi">
                            <option value="5" {{ $product->lokasi == 5? 'selected' : '' }}>Dekat</option>
                            <option value="10" {{ $product->lokasi == 10 ? 'selected' : '' }}>Agak Jauh</option>
                            <option value="15" {{ $product->lokasi == 15 ? 'selected' : '' }}>Jauh</option>
                            <option value="20" {{ $product->lokasi == 20 ? 'selected' : '' }}>Sangat Jauh
                            </option>
                        </select>
                    </div>
                </div>

                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Potensi Produk:</strong>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="potensi_produksi">
                            <option value="50" {{ $product->potensi_produksi == 5? 'selected' : '' }}>Produktif
                            </option>
                            <option value="10" {{$product->potensi_produksi == 10? 'selected' : '' }}>Stabil
                            </option>
                            <option value="15" {{ $product->potensi_produksi == 15 ? 'selected' : '' }}>Menengah
                            </option>
                            <option value="20" {{ $product->potensi_produksi == 20 ? 'selected' : '' }}>Rendah
                            </option>
                        </select>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Aksesibilitas:</strong>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="aksesibilitas">
                            <option value="5" {{ $product->aksesibilitas == 5? 'selected' : '' }}>Sangat Mudah
                                Diakses</option>
                            <option value="10" {{ $product->aksesibilitas == 10 ? 'selected' : '' }}>Mudah
                                Diakses</option>
                            <option value="15" {{ $product->aksesibilitas == 15 ? 'selected' : '' }}>Agak Sulit
                                Diakses</option>
                            <option value="20" {{ $product->aksesibilitas == 20? 'selected' : '' }}>Sangat Sulit
                                Diakses</option>
                        </select>
                    </div>
                </div>
                <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Kondisi Lingkungan:</strong>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="kondisi_lingkungan">
                        <option value="5" {{ $product->kondisi_lingkungan == 5? 'selected' : '' }}>Baik</option>
                        <option value="10" {{ $product->kondisi_lingkungan == 10 ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="15" {{ $product->kondisi_lingkungan == 15 ? 'selected' : '' }}>Buruk
                        </option>
                        <option value="20" {{ $product->kondisi_lingkungan == 20 ? 'selected' : '' }}>Sangat
                            Buruk</option>
                    </select>
                </div>
                </div>

            </div>
            <div class="px-4 py-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
    </div>
    </form>

</x-app-layout>