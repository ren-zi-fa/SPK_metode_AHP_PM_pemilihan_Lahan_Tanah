<x-app-layout>
    @section('title', 'Pembobotan Langsung')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit Pembobotan Langsung') }}
            </h2>
        </div>
    </x-slot>
    <form id="presetpreferenceForm" action="{{ route('user.bobot.langsung.update') }}" method="POST">
        @csrf
        <div class="flex flex-wrap w-1/2">
            <a href="{{ url()->previous() }}"
                class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Back
            </a>
            <noscript>
                <input type="submit" value="Submit form!" />
            </noscript>
            <button type="submit"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
        </div>
        <p class="my-5">Hello <span class="text-red-600">{{
                auth()->user()->name }}</span>, masukkan nilai bobot langsung Tanah yang Anda inginkan (0 - 10).</p>
        <section class="content">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Harga:</strong>
                        <input type="number" name="harga" value="{{ $bobot_langsung->c1 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Harga (Rp)" min=0 max="1000000000000" required>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Perizinan Regulasi: </strong>
                        <input type="number " name="perizinan_regulasi" value="{{ $bobot_langsung->c2 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Perizinan Regulasi" min=0  max="10000" required>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Ketersediaan Air:</strong>
                        <input type="number" name="ketersediaan_air" value="{{ $bobot_langsung->c3 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ketersediaan Air" min=0  max="10000" required>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Lokasi:</strong>
                        <input type="number" name="lokasi" value="{{ $bobot_langsung->c4 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Lokasi" min=0  max="100000" required>
                    </div>
                </div>

                
                <div class="column">
                    <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Potensi Produksi:</strong>
                        <input type="number" name="potensi_produksi" value="{{ $bobot_langsung->c5 }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Potensi Produksi" min=0  max="10000" required>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Aksesibilitas:</strong>
                        <input type="number" name="aksesibilitas" value="{{ $bobot_langsung->c6 }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Aksesibilitas " min=0  max="10000" required>
                    </div>
                </div>
                <div class="px-4 py-3">
                    <div class="form-group">
                        <strong>Bobot Kondisi Lingkungan:</strong>
                        <input type="number" name="kondisi_lingkungan" value="{{ $bobot_langsung->c7 }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Kondisi Lingkungan" min=0  max="10000" required>
                        </div>
                    </div>
                </div>
            </div>
                
    </form>
    </section>
    </form>
</x-app-layout>