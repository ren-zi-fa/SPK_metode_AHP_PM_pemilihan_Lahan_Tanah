<x-app-layout>
    @section('title','Edit Ahp')

    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('AHP Calculation Edit') }}
            </h2>

        </div>
    </x-slot>
    <form id="productCreateForm" action="{{ route('user.bobot.ahp.update', $ahp->id_perhitungan) }}" method="POST">
        @csrf
        <div class="flex flex-wrap w-1/2">
            <a href="{{ route('user.bobot.ahp.index') }}"
                class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Back
            </a>
            <noscript>
                <input type="submit" value="Submit form!" />
            </noscript>
            <button type="submit"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 disabled">Submit</button>
            <div class="ms-4 mb-2">
                <x-units.penyebab-consistent />
            </div>

        </div>


        <div class="grid grid-cols-2 mb-2">
            <div
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-70">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Bobot Kriteria
                        </caption>
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
            <div class="">
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
                                    <input type="text" name="nama_perhitungan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nama Perhitungan" required value="{{ $ahp->nama_perhitungan }}">
                                </td>

                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Detail
                                </th>
                                <td class="px-6 py-4">
                                    <input type="text" name="detail"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Deskripsi" required style="text-align: left"
                                        value="{{ $ahp->detail }}">
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
                                            berpasangan antar kriteria SUDAH konsisten karena menghasilkan nilai
                                            Consitency
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
    
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Tabel Perbandingan Berpasangan
                        <button  onclick="resetTabel()" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium inline-block rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">Reset Table</button>
                    </caption>
                    <tr>
                        <th scope="col" class="px-6 py-3">Kriteria</th>
                        <th scope="col" class="px-6 py-3">C1</th>
                        <th scope="col" class="px-6 py-3">C2</th>
                        <th scope="col" class="px-6 py-3">C3</th>
                        <th scope="col" class="px-6 py-3">C4</th>
                        <th scope="col" class="px-6 py-3">C5</th>
                        <th scope="col" class="px-6 py-3">C6</th>
                        <th scope="col" class="px-6 py-3">C7</th>

                    </tr>
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
                    $amSelect = 0.9999;
                    @endphp

                    <tr>
                        <td class="px-6 py-4">C1</td>
                        <td><input type="text" name="c1c1"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[0]->c1 }}" disabled></td>
                        {{-- <td><select name="c1c1" id="c1c1"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                                <option value="1" selected>1</option>
                            </select></td> --}}
                        <input type="number" name="c1c1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c1c2" id="c1c2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c2) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c1c3" id="c1c3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c3) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c1c4" id="c1c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c4) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c1c5" id="c1c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c5) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c1c6" id="c1c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c6) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c1c7" id="c1c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[0]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C2</td>
                        <td><input name="c2c1" id="c2c1" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[1]->c1) }}" disabled></td>
                        <td><input type="text" name="c2c2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[1]->c2 }}" disabled></td> <input type="number" name="c2c2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c2c3" id="c2c3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[1]->c3) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c2c4" id="c2c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[1]->c4) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c2c5" id="c2c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[1]->c5) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c2c6" id="c2c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[1]->c6) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c2c7" id="c2c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[1]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C3</td>
                        <td><input name="c3c1" id="c3c1" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[2]->c1) }}" disabled></td>
                        <td><input name="c3c2" id="c3c2" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[2]->c2) }}" disabled></td>
                        <td><input type="text" name="c3c3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[2]->c3 }}" disabled></td> <input type="number" name="c3c3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c3c4" id="c3c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[2]->c4) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c3c5" id="c3c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[2]->c5) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c3c6" id="c3c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[2]->c6) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c3c7" id="c3c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[2]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C4</td>
                        <td><input name="c4c1" id="c4c1" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[3]->c1) }}" disabled></td>
                        <td><input name="c4c2" id="c4c2" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[3]->c2) }}" disabled></td>
                        <td><input name="c4c3" id="c4c3" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[3]->c3) }}" disabled></td>
                        <td><input type="text" name="c4c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[3]->c4 }}" disabled></td> <input type="number" name="c4c4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c4c5" id="c4c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[3]->c5) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c4c6" id="c4c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[3]->c6) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c4c7" id="c4c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[3]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C5</td>
                        <td><input name="c5c1" id="c5c1" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[4]->c1) }}" disabled></td>
                        <td><input name="c5c2" id="c5c2" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[4]->c2) }}" disabled></td>
                        <td><input name="c5c3" id="c5c3" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[4]->c3) }}" disabled></td>
                        <td><input name="c5c4" id="c5c4" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[4]->c4) }}" disabled></td>
                        <td><input type="text" name="c5c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[4]->c5 }}" disabled></td> <input type="number" name="c5c5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c5c6" id="c5c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[4]->c6) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>
                        <td><select name="c5c7" id="c5c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[4]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C6</td>
                        <td><input name="c6c1" id="c6c1" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[5]->c1) }}" disabled></td>
                        <td><input name="c6c2" id="c6c2" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[5]->c2) }}" disabled></td>
                        <td><input name="c6c3" id="c6c3" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[5]->c3) }}" disabled></td>
                        <td><input name="c6c4" id="c6c4" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[5]->c4) }}" disabled></td>
                        <td><input name="c6c5" id="c6c5" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[5]->c5) }}" disabled></td>
                        <td><input type="text" name="c6c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[5]->c6 }}" disabled></td> <input type="number" name="c6c6"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">

                        <td><select name="c6c7" id="c6c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required> @foreach ($sharedOptions as $item)
                                <option value="{{ $item[0] }}" @if ($item[0]==$PB_obj[5]->c7) selected='selected' @endif
                                    @if ($item[0]
                                    === '') disabled selected @endif> {{ $item[1] }} </option> @endforeach
                            </select></td>

                    </tr>

                    <tr>
                        <td class="px-6 py-4">C7</td>
                        <td><input name="c7c1" id="c7c1"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c1) }}" disabled></td>
                        <td><input name="c7c2" id="c7c2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c2) }}" disabled></td>
                        <td><input name="c7c3" id="c7c3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c3) }}" disabled></td>
                        <td><input name="c7c4" id="c7c4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c4) }}" disabled></td>
                        <td><input name="c7c5" id="c7c5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c5) }}" disabled></td>
                        <td><input name="c7c6" id="c7c6"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ float_to_divide_form($PB_obj[6]->c6) }}" disabled></td>
                        <td><input type="text" name="c7c7"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $PB_obj[6]->c7 }}" disabled></td> <input type="number" name="c7c7"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            style="display: none" value="1">


                    </tr>
                    <script>
                        // id="c1c2" onchange="isi_kolom_yg_satunya(event)"    <==== masukkan di element <input ....here...>
                  function roundToTwo(num) {
                  return +(Math.round(num + "e+2")  + "e-2");
                  }
                  function round_if(num) {
                  if (num >= 9) { return 9 } 
                  else if (num >= 1) { return num.toFixed(0) }
                  else { return roundToTwo(num) }
                  }
                  
                  var onChangeCoba = function(evt) {
                  console.log('x');
                  // or
                  // console.log(evt.target.value);
                  };
                  function isi_kolom_yg_satunya(e)
                  {
                  var source = event.target || event.srcElement;
                  var source_element = document.getElementById(source.id)
                  
                  var id = source.id
                  var first_c = 'c' + id.split("c")[1]
                  var last_c = 'c' + id.split("c")[2]
                  var full_el_target_id = last_c + first_c
                  // console.log(full_el_target_id)
                  // alert(id)
                  
                  var target_element = document.getElementById(full_el_target_id)
                  // console.log(source_element.options[source_element.selectedIndex].text)
                  var source_str = source_element.options[source_element.selectedIndex].text;
                  var temp = ''
                  console.log(source_str.includes("/"))
                  if (source_str.includes("/")) {
                  temp = source_str.split("/")[1]
                  } else if (!source_str.includes("1")) {
                  temp = '1/' + source_str
                  } else {
                  temp = source_str
                  }
                  target_element.value = temp
                  }
                  
                  var elements = document.getElementsByClassName("bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500");
                  
                  var myFunction = function() {
                  var attribute = this.getAttribute("data-myattribute");
                  alert(attribute);
                  };
                  
                  for (var i = 0; i < elements.length; i++) {
                  elements[i].addEventListener('load', isi_kolom_yg_satunya, false);
                  elements[i].addEventListener('keyup', isi_kolom_yg_satunya, false);
                  elements[i].addEventListener('change', isi_kolom_yg_satunya, false);
                  elements[i].addEventListener('click', isi_kolom_yg_satunya, false);
                  }
                  
                  function resetTabel(e) {
                  for (var i = 0; i < elements.length; i++) {
                  if (elements[i].id.includes('c'))  {
                    elements[i].value = '1'
                  }
                  }
                  }
                      </script>
                </table>
    </form>
</x-app-layout>