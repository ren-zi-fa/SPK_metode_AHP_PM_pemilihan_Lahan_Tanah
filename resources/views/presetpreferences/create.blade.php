<x-app-layout>
    @section('title', 'Presetreference')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Create Presetrepreference') }}
            </h2>

        </div>
    </x-slot>
    <form id="presetpreferenceCreateForm" action="{{ route('presetpreferences.store') }}" method="POST">
        @csrf
        <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2y"
            href="{{ route('presetpreferences.index') }}"> Back</a>
        <noscript>
            <input type="submit" value="Submit form!" />
        </noscript>
        <button type="submit"
            class="inline-block text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
        <section class="content">

            <div
                class="block max-w-sm p-6 bg-white mt-5 mx-auto border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Preset Preference Name:</strong>
                            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Harga :</strong>
                            <input type="number" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga (Rp)" min=0
                                required>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Perizinan Regulasi: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="perizinan_regulasi">
                                <option selected value="50">Mudah</option>
                                <option value="100">Sedang</option>
                                <option value="150">Sulit</option>
                                <option value="200">Sangat Sulit</option>
                            </select>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Ketersediaan Air: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ketersediaan_air">
                                <option selected value="50">Tersedia Sepenuhnya</option>
                                <option value="100">Tersedia Dengan Baik</option>
                                <option value="150">Ketersediaan Terbatas</option>
                                <option value="200">Ketersediaan Terbatas Sekali</option>
                            </select>
                        </div>
                    </div>
              
                
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Lokasi: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="lokasi">
                                <option selected value="50">Dekat</option>
                                <option value="100">Agak Jauh</option>
                                <option value="150">Jauh</option>
                                <option value="200">Sangat Jauh</option>
                            </select>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Potensi Produksi : </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="potensi_produksi">
                                <option selected value="50">Produktif</option>
                                <option value="100">Stabil</option>
                                <option value="150">Menengah</option>
                                <option value="200">Rendah</option>
                            </select>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Aksesibilitas: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="aksesibilitas">
                                <option selected value="50">Sangat Mudah Diakses</option>
                                <option value="100">Mudah Diakses</option>
                                <option value="150">Agak Sulit Diakses</option>
                                <option value="200">Sangat Sulit Diakses</option>
                            </select>
                        </div>
                    </div>
                    <div class=" relative z-0 w-full mb-5 group">
                        <div class="form-group">
                            <strong>Kondisi Lingkungan: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kondisi_lingkungan">
                                <option selected value="50">Baik</option>
                                <option value="100">Cukup</option>
                                <option value="150">Buruk</option>
                                <option value="200">Sangat Buruk</option>
                            </select>
                        </div>
                    </div>
              
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:150px" name="detail" placeholder="Detail"
                            required></textarea>
                    </div>
                </div>
           
        </section>
    </form>
</x-app-layout>