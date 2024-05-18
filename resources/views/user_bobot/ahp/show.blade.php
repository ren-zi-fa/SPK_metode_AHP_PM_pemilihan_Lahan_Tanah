<x-app-layout>
    @section('title','Create Ahp')

    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('AHP Calculation Detail') }}
            </h2>

        </div>
    </x-slot>
    <div class="flex flex-wrap w-1/2">
        <a href="{{ route('user.bobot.ahp.index') }}"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Back
        </a>
        <noscript>
            <input type="submit" value="Submit form!" />
        </noscript>
        @inject('html', 'Spatie\Html\Html')

        @if ($ahp->is_created_by_admin)
        @if(Auth::user()->hasRole('Admin'))
        <a class="text-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            href="{{ route('user.bobot.ahp.edit',$ahp->id_perhitungan) }}">Edit</a>
        @endif
        @else <a
            class="text-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            href="{{ route('user.bobot.ahp.edit',$ahp->id_perhitungan) }}">Edit</a>
        @endif
        @if (!(auth()->user()->id_perhitungan_aktif === $ahp->id_perhitungan) && $ahp->is_konsisten)
        {!! $html->form()->action(route('user.bobot.ahp.toggle',
        $ahp->id_perhitungan))->method('POST')->style('display:inline')->open() !!}

        {!!$html->submit('Gunakan Bobot Kriteria')->class('focus:outline-none text-white bg-purple-700
        hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2
        dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900')!!}
        {!! $html->form()->close() !!}
        @else
        <a
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 disabled">Gunakan
            Bobot Kriteria</a>
        @endif

    </div>
    <div class="grid grid-cols-2 mb-2">
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h3 class="">Bobot Kriteria </h3>
            @if ( auth()->user()->id_perhitungan_aktif === $ahp->id_perhitungan ) <label
                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                <x-eos-check-circle-outline-o class="flex-shrink-0 w-4 h-4 inline-block me-2" /> Bobot Kriteria Aktif
                Digunakan
            </label>
            @else @if ($bobot->consistency_ratio > 0.1)
            <label
                class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                <x-eos-dangerous class="flex-shrink-0 w-6 h-6 inline-block me-2" /> Bobot Kriteria Tidak Dapat
                Digunakan
            </label>
            @else <label
                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                <x-eos-check-circle-outline-o class="flex-shrink-0 w-4 h-4 inline-block me-2" /> Bobot Kriteria Siap
                Digunakan
            </label>
            @endif
            @endif


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kriteria
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bobot
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C1
                            </th>
                            <td class="px-6 py-4">
                                Harga tanah
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c1 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C2
                            </th>
                            <td class="px-6 py-4">
                                Perizinan Regulasi
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c2 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C3
                            </th>
                            <td class="px-6 py-4">
                                Ketersediaan Air
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c3 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C4
                            </th>
                            <td class="px-6 py-4">
                                Lokasi
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c4 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C5
                            </th>
                            <td class="px-6 py-4">
                                Potensi Produksi
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c5 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C6
                            </th>
                            <td class="px-6 py-4">
                                Aksesibilitas
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c6 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C7
                            </th>
                            <td class="px-6 py-4">
                                Kondisi Lingkungan
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($bobot->c7 * 100 ,0,",",".") . ' %' }}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="block ">
            <x-units.dropdown-acuan />
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Detail Perhitungan
                    </caption>

                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Perhitungan
                            </th>
                            <td class="px-6 py-4">
                                {{ $ahp->nama_perhitungan }}
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Lamda Max
                            </th>
                            <td class="px-6 py-4">
                                {{ $bobot->lamda_max }}
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Consistency Index (CI)
                            </th>
                            <td class="px-6 py-4">
                                {{ $bobot->consistency_index }}
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Consistency Ratio (CR)
                            </th>
                            <td class="px-6 py-4">
                                {{ $bobot->consistency_ratio }}
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                colspna="3">
                                Catatan :
                            </th>
                            <td class="px-6 py-4">
                                @if ( $ahp->is_konsisten ) <h5><label
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Hasil
                                        Perbandingan
                                        berpasangan antar kriteria SUDAH konsisten karena menghasilkan nilai Consitency
                                        Ratio < 0,1 </label>
                                </h5>
                                @else <h5><label
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Hasil
                                        Perbandingan berpasangan antar
                                        kriteria BELUM
                                        konsisten karena menghasilkan nilai Consitency Ratio >= 0,1 </label></h5>
                                @endif
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Tabel Perbandingan Berpasangan

                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C3
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C4
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C5
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C6
                        </th>
                        <th scope="col" class="px-6 py-3">
                            C7
                        </th>

                    </tr>
                </thead>
                <datalist id="bobot">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    {{-- <option value="1">1/1</option> --}}
                    <option value="0.5">1/2</option>
                    <option value="0.33">1/3</option>
                    <option value="0.25">1/4</option>
                    <option value="0.20">1/5</option>
                    <option value="0.17">1/6</option>
                    <option value="0.14">1/7</option>
                    <option value="0.13">1/8</option>
                    <option value="0.11">1/9</option>
                    {{-- <option value="1">2/2</option> --}}
                    <option value="0.67">2/3</option>
                    <option value="0.5">2/4</option>
                    <option value="0.4">2/5</option>
                    <option value="0.33">2/6</option>
                    <option value="0.29">2/7</option>
                    <option value="0.25">2/8</option>
                    <option value="0.22">2/9</option>
                    {{-- <option value="1">3/3</option> --}}
                    <option value="0.75">3/4</option>
                    <option value="0.6">3/5</option>
                    <option value="0.5">3/6</option>
                    <option value="0.43">3/7</option>
                    <option value="0.38">3/8</option>
                    <option value="0.33">3/9</option>
                    {{-- <option value="1">4/4</option> --}}
                    <option value="0.8">4/5</option>
                    <option value="0.67">4/6</option>
                    <option value="0.57">4/7</option>
                    <option value="0.5">4/8</option>
                    <option value="0.44">4/9</option>
                    {{-- <option value="1">5/5</option> --}}
                    <option value="0.83">5/6</option>
                    <option value="0.71">5/7</option>
                    <option value="0.63">5/8</option>
                    <option value="0.56">5/9</option>
                    {{-- <option value="1">6/6</option> --}}
                    <option value="0.86">6/7</option>
                    <option value="0.75">6/8</option>
                    <option value="0.67">6/9</option>
                    {{-- <option value="1">7/7</option> --}}
                    <option value="0.88">7/8</option>
                    <option value="0.78">7/9</option>
                    {{-- <option value="1">8/8</option> --}}
                    <option value="0.89">8/9</option>
                    {{-- <option value="1">9/9</option> --}}
                </datalist>
                @php
                function float_to_divide_form($value)
                {
                $sharedOptions = [
                ['', '.....'],
                [1, '1'],
                [2, '2'],
                [3, '3'],
                [4, '4'],
                [5, '5'],
                [6, '6'],
                [7, '7'],
                [8, '8'],
                [9, '9'],
                [0.5, '1/2'],
                [0.33, '1/3'],
                [0.25, '1/4'],
                [0.20, '1/5'],
                [0.17, '1/6'],
                [0.14, '1/7'],
                [0.13, '1/8'],
                [0.11, '1/9']
                ];

                foreach ($sharedOptions as $item) {
                if ($item[0] == $value) {
                $gettedItem = $item;
                return $item[1];
                }
                }

                };
                @endphp
                <tbody>
                    @foreach ($PB_obj as $row)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $row->nama_kriteria }}</td>
                        <td> <input disabled type="text" name="c1c2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c1) }}"> </td>
                        <td> <input disabled type="text" name="c1c3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c2) }}"> </td>
                        <td> <input disabled type="text" name="c1c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c3) }}"> </td>
                        <td> <input disabled type="text" name="c1c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c4) }}"> </td>
                        <td> <input disabled type="text" name="c1c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c5) }}"> </td>
                        <td> <input disabled type="text" name="c1c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c6) }}"> </td>
                        <td> <input disabled type="text" name="c1c8"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" min=0.11 max="9" step="0.01"
                                value="{{ float_to_divide_form($row->c7) }}"> </td>
                    </tr>


                </tbody>
                @endforeach
            </table>
        </div>

    </div>
</x-app-layout>