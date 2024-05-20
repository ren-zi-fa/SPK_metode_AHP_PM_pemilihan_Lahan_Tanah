<x-app-layout>
    @section('title', 'Pembobotan Langsung')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Pembobotan Langsung') }}
            </h2>

        </div>
    </x-slot>
    <form id="presetpreferenceForm" action="{{ route('rekomendasi.hasil') }}" method="POST">
        @csrf
        <div class="mt-8 flex gap-2">
            <div class="">
                <a href="{{ route('rekomendasi.index') }}"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                    <x-eos-add-reaction-o  class="flex-shrink-0 w-6 h-6 inline-block " aria-hidden="true" /> Mulai
                    Rekomendasi
                </a>
            </div>
            <div class="">
                <a href="{{route('user.bobot.langsung.edit') }}"
                    class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Edit bobot
                </a>
            </div>
            <noscript>
                <input type="submit" value="Submit form!" />
            </noscript>
        </div>
        <p class="my-4">Hello <span class="text-lime-600 text-lg">{{ auth()->user()->name }}</span>, berikut nilai bobot langsung
            Tanah yang Anda inginkan (semakin tinggi nilai bobot semakin diprioritaskan).</p>
            <section class="content">

                <div class="column">
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot Harga:</strong>
                            <input type="number" name="harga" value="{{ $bobot_langsung->c1 }}" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled
                                placeholder="Harga (Rp)" min=0 max="200000000" required>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot Perizinan Regulasi: </strong>
                            <input type="number" name="perizinan_regulasi" value="{{ $bobot_langsung->c2 }}"
                                id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled placeholder="perizinan_regulasi" min=0 step="0.01" max="200" required>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot ketersediaan_air:</strong>
                            <input type="number" name="ketersediaan_air" value="{{ $bobot_langsung->c3 }}"
                                id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled placeholder="ketersediaan air " min="0.1" step="0.1" max="64" required>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot Lokasi:</strong>
                            <input type="number" name="lokasi" value="{{ $bobot_langsung->c4 }}" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled
                                placeholder="Lokasi " min="0" step="0.1" max="5000" required>
                        </div>
                    </div>
        
                </div>
        
                <div class="column">
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot Potensi Produksi</strong>
                            <input type="number" name="potensi_produksi" value="{{ $bobot_langsung->c5 }}"
                                id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled placeholder="potensi produksi " min="0" step="0.1" max="5000" required>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot aksesibilitas:</strong>
                            <input type="number" name="aksesibilitas" value="{{ $bobot_langsung->c6 }}"
                                id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled placeholder="aksesibilitas" min="0.1" step="0.1" max="32" required>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="form-group">
                            <strong>Bobot Kondisi Lingkungan:</strong>
                            <input type="number" name="kondisi_lingkungan" value="{{ $bobot_langsung->c7 }}"
                                id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Disabled input" disabled placeholder="Kondisi Lingkungan:" min="0.1" step="0.1"
                                max="64" required>
                        </div>
                    </div>
        
                </div>
        </section>
    </form>
</x-app-layout>