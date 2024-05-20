<x-app-layout>
    @section('title', 'Product')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Create Product') }}
            </h2>

        </div>
    </x-slot>


    <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        href="{{ route('products.index') }}"> Back
    </a>
    <noscript>
        <input type="submit" value="Submit form!" />
    </noscript>

    <section class="content">
        @inject('html', 'Spatie\Html\Html')

        {!! $html->form()->action(route('products.store'))->method('POST')->open() !!}
        <div
            class="block max-w-sm p-6 bg-white mt-5 mx-auto border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input type="text" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Name" required>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Harga :</strong>
                    <input type="number" name="harga"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Harga " min="" required>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Perizinan Regulasi: </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="perizinan_regulasi">
                        <option selected value="5">Mudah</option>
                        <option value="10">Sedang</option>
                        <option value="15">Sulit</option>
                        <option value="20">Sangat Sulit</option>
                    </select>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Ketersediaan Air: </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ketersediaan_air">
                        <option selected value="5">Tersedia Sepenuhnya</option>
                        <option value="10">Tersedia Dengan Baik</option>
                        <option value="15">Ketersediaan Terbatas</option>
                        <option value="20">Ketersediaan Terbatas Sekali</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="column">
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Lokasi: </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="lokasi">
                        <option selected value="5">Dekat</option>
                        <option value="10">Agak Jauh</option>
                        <option value="15">Jauh</option>
                        <option value="20">Sangat Jauh</option>
                    </select>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Potensi Produksi : </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="potensi_produksi">
                        <option selected value="5">Produktif</option>
                        <option value="10">Stabil</option>
                        <option value="15">Menengah</option>
                        <option value="20">Rendah</option>
                    </select>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Aksesibilitas: </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="aksesibilitas">
                        <option selected value="5">Sangat Mudah Diakses</option>
                        <option value="10">Mudah Diakses</option>
                        <option value="15">Agak Sulit Diakses</option>
                        <option value="20">Sangat Sulit Diakses</option>
                    </select>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="form-group">
                    <strong>Kondisi Lingkungan: </strong>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kondisi_lingkungan">
                        <option selected value="5">Baik</option>
                        <option value="10">Cukup</option>
                        <option value="15">Buruk</option>
                        <option value="20">Sangat Buruk</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="relative z-0 w-full mb-5 group">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <button type="submit"
            class="inline-block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
        {!! $html->form()->close() !!}
        </div>

    </section>

</x-app-layout>