<x-app-layout>
    @section('title', 'Rekomendasi')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Masukkan nilai preferensi tanah yang anda inginkan secara manual atau gunakan nilai preset
                preferensi yang tersedia') }}
            </h2>

        </div>
    </x-slot>
    <form id="presetpreferenceForm" action="{{ route('rekomendasi.hasil') }}" method="POST" class="mb-4">
        @csrf
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <a href="{{ route('user.bobot.ahp.index') }}"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-2 py-2.5 text-center me-2 mb-2">
                <x-eos-edit class="flex-shrink-0 w-6 h-6 inline-block me-2" />Edit Pembobotan AHP
            </a>
            <a href="{{ route('rekomendasi.list_preset')}}"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                <x-eos-swipe-down class="flex-shrink-0 w-6 h-6 inline-block me-2" />Gunakan Nilai Preset Preferensi
            </a>
            <noscript>
                <input type="submit" value="Submit form!" />
            </noscript>
            <button type="submit"
                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                <x-eos-service-instance class="flex-shrink-0 w-6 h-6 inline-block me-2" />Rekomendasikan
            </button>
        </div>
  
        <div class="mx-0 auto my-5">
            <div class="max-w-sm mx-auto">
                <label for="default"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Pembobotan Yang
                    Digunakan</label>
                <select id="default" name="jenis_pembobotan"
                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-700 rounded-lg bg-gray-100 focus:ring-blue-500 focus:border-blue-500 dark:bg-purple-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled>-- Pilih salah satu --</option>
                    <option value="1" selected>Analytical Hierarchy Process (AHP)</option>
                    <option value="0">Pembobotan langsung</option>
                </select>
            </div>

        </div>
        
        <section class="container mx-0 auto">
            @if ($presetpreference !== null)
            <div class="row">
                <div class="grid grid-cols-2">
                    {{-- harga --}}
                    <div class="grid grid-cols-2">
                        <div class="form-group">
                                    <strong>Harga:</strong>    
                            <div class="">
                                <ul class="items-center w-full text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                                    <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3 ">
                                            <input id="c1_rad0" type="radio" name="prioritas[0]"
                                            value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c1_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                                kriteria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c1_rad1" name="prioritas[0]"
                                            value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c1_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                terendah</label>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="items-center my-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c1_rad2" name="prioritas[0]" 
                                            value="Prioritas Nilai Tertinggi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c1_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                tertinggi</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c1_rad3" name="prioritas[0]"
                                            value="Prioritas Nilai Preferensi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for='c1_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                        </div>
                                    </li>
                                </ul>
                               
                            </div>
                            <input type="number"placeholder="Harga" min=0 required id="c1" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="harga" value="{{ $presetpreference->harga }}"/>
                          
                        </div>
                    </div>
                       {{-- harga --}}
                       {{-- perizinan regulasi --}}
                    <div class="grid grid-cols-2">
                        <div class="form-group">
                                    <strong>Perizinan Regulasi:</strong>    
                            <div class="">
                                <ul class="items-center w-full text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                                    <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3 ">
                                            <input type="radio" id="c2_rad0" name="prioritas[1]"
                                            value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c2_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                                kriteria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c2_rad1" name="prioritas[1]"
                                            value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c2_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                terendah</label>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="items-center my-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" checked type="radio" id="c2_rad2" name="prioritas[1]"
                                            value="Prioritas Nilai Tertinggi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c2_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                tertinggi</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c2_rad3" name="prioritas[1]"
                                            value="Prioritas Nilai Preferensi" @if (is_numeric($presetpreference->perizinan_regulasi))
                                        checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for='c2_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                        </div>
                                    </li>
                                </ul>
                               
                            </div>
                            <input  type="number" id="c2" name="perizinan_regulasi" placeholder="Perizinan Regulasi"  value="{{ $presetpreference->perizinan_regulasi }}" @if(!(is_numeric($presetpreference->perizinan_regulasi))) disabled @endif 
                            required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                          
                        </div>
                    </div>
                     {{--end perizinan regulasi --}}
                  {{-- ketersediaan Air --}}
                  <div class="grid grid-cols-2">
                    <div class="form-group">
                                <strong>Ketersediaan Air:</strong>    
                        <div class="">
                            <ul class="items-center w-full text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                                <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3 ">
                                        <input type="radio" id="c3_rad0" name="prioritas[2]"
                                        value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="c3_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                            kriteria</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input type="radio" id="c3_rad1" name="prioritas[2]"
                                        value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="c3_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                            terendah</label>
                                    </div>
                                </li>
                            </ul>
                            <ul class="items-center my-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input type="radio" id="c3_rad2" name="prioritas[2]"
                                        value="Prioritas Nilai Tertinggi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="c3_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                            tertinggi</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input type="radio" id="c3_rad3" name="prioritas[2]"
                                        value="Prioritas Nilai Preferensi"
                                         @if (is_numeric($presetpreference->ketersediaan_air)) checked
                                    @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for='c3_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                    </div>
                                </li>
                            </ul>
                           
                        </div>
                        <input  type="number" id="c3" name="ketersediaan_air" value="{{ $presetpreference->ketersediaan_air }}" placeholder="Ketersediaan Air"
                        required
                        @if (!(is_numeric($presetpreference->ketersediaan_air))) disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                      
                    </div>
                </div>
                     {{-- end ketersediaan Air --}}
                     {{-- lokasi --}}
                     <div class="grid grid-cols-2">
                        <div class="form-group">
                                    <strong>Lokasi:</strong>    
                            <div class="">
                                <ul class="items-center w-full text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                                    <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3 ">
                                            <input type="radio" id="c4_rad0" name="prioritas[3]"
                                            value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c4_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                                kriteria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c4_rad1" name="prioritas[3]"
                                            value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c4_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                terendah</label>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="items-center my-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c4_rad2" name="prioritas[3]"
                                            value="Prioritas Nilai Tertinggi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c4_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                tertinggi</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c4_rad3" name="prioritas[3]"
                                            value="Prioritas Nilai Preferensi"
                                             @if  (is_numeric($presetpreference->lokasi)) checked
                                        @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for='c4_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                        </div>
                                    </li>
                                </ul>
                               
                            </div>
                            <input type="number" id="c4" name="lokasi" value="{{ $presetpreference->lokasi }}"
                            @if (!(is_numeric($presetpreference->lokasi))) disabled @endif
                      placeholder="Lokasi"  required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                          
                        </div>
                    </div>
        {{-- end lokasi --}}
                </div>
    {{-- potensi produksi --}}
    <div class="grid grid-cols-2">
        <div class="form-group">
                    <strong>Potensi Produksi:</strong>    
            <div class="">
                <ul class="items-center w-1/2 text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                    <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3 ">
                            <input type="radio" id="c5_rad0" name="prioritas[4]"
                            value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="c5_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                kriteria</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input type="radio" id="c5_rad1" name="prioritas[4]"
                            value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="c5_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                terendah</label>
                        </div>
                    </li>
                </ul>
                <ul class="items-center my-2 w-1/2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input type="radio" id="c5_rad2" name="prioritas[4]"
                            value="Prioritas Nilai Tertinggi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="c5_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                tertinggi</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input type="radio" id="c5_rad3" name="prioritas[4]"
                            value="Prioritas Nilai Preferensi" @if(is_numeric($presetpreference->potensi_produksi)) checked
                        @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for='c5_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                        </div>
                    </li>
                </ul>
               
            </div>
            <input type="number" id="c5" name="potensi_produksi" value="{{ $presetpreference->potensi_produksi }}"
            @if (!(is_numeric($presetpreference->potensi_produksi))) disabled @endif placeholder="Potensi Produksi"
        required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
          
        </div>
        {{-- end potensi produksi --}}
        {{-- aksesibilitas --}}
        <div class="grid grid-cols-2">
            <div class="form-group">
                <strong>Aksesibilitas:</strong>    
                <div class="">
                    <ul class="items-center w-full text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                        <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3 ">
                                        <input type="radio" id="c6_rad0" name="prioritas[5]"
                                        value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="c6_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                            kriteria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c6_rad1" name="prioritas[5]"
                                            value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c6_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                terendah</label>
                                    </div>
                                </li>
                            </ul>
                            <ul class="items-center my-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input type="radio" id="c6_rad2" name="prioritas[5]"
                                        value="Prioritas Nilai Tertinggi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="c6_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                            tertinggi</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                        <input type="radio" id="c6_rad3" name="prioritas[5]"
                                        value="Prioritas Nilai Preferensi" @if(is_numeric($presetpreference->aksesibilitas)) checked
                                    @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for='c6_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                    </div>
                                </li>
                            </ul>
                           
                        </div>
                        <input type="number" id="c6" name="aksesibilitas"
                        value="{{ $presetpreference->aksesibilitas }}"
                         @if(!(is_numeric($presetpreference->aksesibilitas))) disabled @endif placeholder="Aksesibilitas" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                         
                    </div>
                </div>
                {{-- kondisi lingkungan --}}
    
            </div>  
        </div>
            {{-- end aksesibilitas --}}

            {{-- kondisi lingkungan --}}
            <div class="grid grid-cols-2 mb-4">
                <div class="form-group">
                    <strong>Kondisi Lingkungan:</strong>    
                    <div class="">
                        <ul class="items-center w-1/2 text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white font-semibold">
                            <li class="w-full border-b my-2 border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3 ">
                                            <input type="radio" id="c7_rad0" name="prioritas[6]"
                                            value="Kriteria Diabaikan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c7_rad0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abaikan
                                                kriteria</label>
                                            </div>
                                        </li>
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                            <div class="flex items-center ps-3">
                                                <input type="radio" id="c7_rad1" name="prioritas[6]"
                                                value="Prioritas Nilai Terendah" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="c7_rad1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                    terendah</label>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="items-center my-2 w-1/2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input type="radio" id="c7_rad2" name="prioritas[6]"
                                            value="Prioritas Nilai Tertinggi" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="c7_rad2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas nilai
                                                tertinggi</label>
                                            </div>
                                        </li>
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                            <div class="flex items-center ps-3">
                                            <input  type="radio" id="c7_rad3" name="prioritas[6]"
                                            value="Prioritas Nilai Preferensi" @if(is_numeric($presetpreference->kondisi_lingkungan)) checked
                                        @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for='c7_rad3' class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferensi nilai</label>
                                        </div>
                                    </li>
                                </ul>
                               
                            </div>
                            <input type="number" id="c7" name="kondisi_lingkungan"
                            value="{{ $presetpreference->kondisi_lingkungan }}" @if(!(is_numeric($presetpreference->kondisi_lingkungan)))disabled @endif 
                            placeholder="Kondisi Lingkungan"
                        required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                             
                        </div>
                    </div>
                    {{-- end kondisi lingkungan --}}
        
        </form>
    
    @else
        <div class="column mb-4" >
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Harga :</strong>
                    <input type="number" name="harga" class="form-control" placeholder="Harga " >
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Perizinan Regulasi: </strong>
                    <input type="number" name="perizinan_regulasi" class="form-control" placeholder="Perizinan Regulasi" >
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Ketersediaan Air</strong>
                    <input type="number" name="ketersediaan_air" class="form-control" placeholder="Ketersediaan Air" >
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Lokasi</strong>
                    <input type="number" name="lokasi" class="form-control" placeholder="Lokasi" >
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Potensi Produksi:</strong>
                    <input type="number" name="potensi_produksi" class="form-control" placeholder="Potensi Produksi">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Aksesibilitas</strong>
                    <input type="number" name="aksesibilitas" class="form-control" placeholder="Aksesibilitas">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <strong>Kondisi Lingkungan:</strong>
                    <input type="number" name="kondisi_lingkungan" class="form-control"
                        placeholder="Kondisi Lingkungan">
                </div>
            </div>
        </div>
        @endif
    
    {{-- table --}}
    
<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white mt-4" data-inactive-classes="text-gray-500 dark:text-gray-50">
    <h2 id="accordion-flush-heading-1">
      <button type="button" class="flex items-center justify-between w-full py-5  rtl:text-right text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5  text-center me-2 mb-2 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
        <span>Bobot Kriteria yang digunakan dalam perhitungan rekomendasi</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Kriteria</th>
                        <th scope="col" class="px-6 py-3">Bobot antar kriteria hasil AHP</th>
                        <th scope="col" class="px-6 py-3">Bobot antar kriteria hasil pembobotan langsung</th>
                    </tr>
                </thead>
                <tbody>
    
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C1</th>
                        <td><strong> Harga Tanah </strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c1 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c1 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C2</th>
                        <td><strong> Perizinan Regulasi</strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c2 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c2 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C3</th>
                        <td><strong> Ketersediaan Air </strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c3 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c3 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C4</th>
                        <td><strong>Lokasi </strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c4 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c4 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C5</th>
                        <td><strong> Potensi Produksi</strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c5 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c5 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C6</th>
                        <td><strong>Akseibilitas </strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c6 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c6 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">C7</th>
                        <td><strong> Kondisi Lingkungan </strong></td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_ahp->c7 * 100,0,",",".") . ' %' }}
                            </strong> </td>
                        <td class="px-6 py-4"> <strong> {{ number_format($bobot_langsung->c7 * 100,0,",",".") . ' %'
                                }} </strong> </td>
                    </tr>
    
    
                </tbody>
            </table>
        </div>
    </div>
    
  </div>
  {{-- table --}}

       

        </section>
    
        <script>
            function disable_enable_input_form(event) {
            var source = event.target || event.srcElement;
            var source_element = document.getElementById(source.id);
    
            var id = source.id;
            var input_form_target_id = id.split('_')[0];
            var target_element = document.getElementById(input_form_target_id);
    
            var radio_input_val = id.split('_')[1];
    
            if (radio_input_val === "rad3") {
                target_element.disabled = false;
            } else {
                target_element.disabled = true;
            }
        }
    
        var radios = document.querySelectorAll("input[type=radio]");
    
        for (const element of radios) {
            element.addEventListener('change', disable_enable_input_form, false);
        };
        </script>
</x-app-layout>