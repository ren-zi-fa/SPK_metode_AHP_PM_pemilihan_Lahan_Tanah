<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Silakan Buat Baru atau Pilih Pembobotan Kriteria AHP yang KONSISTEN yang ingin digunakan dengan
                tekan tombol Set Aktif') }}
                <x-eos-arrow-forward class="flex-shrink-0 w-6 h-6 inline-block text-red-600" aria-hidden="true" /> {{
                __('Kemudian
                tekan tombol Mulai Rekomendasi.') }}
            </h2>
        </div>
       
        <div class="mt-8 flex gap-2">
            <div class="">
                <a href=""
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                    <x-eos-queue-play-next class="flex-shrink-0 w-6 h-6 inline-block " aria-hidden="true" /> Mulai
                    Rekomendasi
                </a>
            </div>
            <div class="">
                <a href=""
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-yellow-900">
                    <x-eos-add class="flex-shrink-0 w-6 h-6 inline-block" aria-hidden="true" /> Buat Baru Pembobotan
                    Kriteria Menggunakan Metode AHP
                </a>
            </div>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Perhitungan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Atribut
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ahplist as $key => $ahp)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $ahp->nama_perhitungan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $ahp->detail }}
                        </td>
                        <td class="px-6 py-4">
                            @if ( $ahp->is_created_by_admin ) <label
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                Dibuat Admin
                            </label>
                            @else
                            @if ( $ahp->creator_id === auth()->user()->id )
                            <label
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Dibuat oleh Anda</label>
                            @else
                            <label
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Dibuat User</label>
                            @endif
                            @endif


                            @if ( $ahp->is_konsisten ) <label
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Perhitungan
                                Konsisten </label>
                            @else <label
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                Perhitungan Belum Konsisten </label>
                            @endif

                            @if ( auth()->user()->id_perhitungan_aktif === $ahp->id_perhitungan ) <label
                                class="bg-red-100 text-red-800 text-sm font-medium  px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                <x-eos-check-circle-o class="flex-shrink-0 w-4 h-4 inline-block" /> Bobot
                                Kriteria Aktif Digunakan
                            </label>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                href="{{ route('user.bobot.ahp.show',$ahp->id_perhitungan) }}">Detail</a>
                            @inject('html', 'Spatie\Html\Html')

                            @if ($ahp->is_created_by_admin)
                          
                            @can('admin', \App\Models\User::class)
                            <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                href="{{ route('user.bobot.ahp.edit',$ahp->id_perhitungan) }}">Edit</a>
                            @endcan
                            @else
                            <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                href="{{ route('user.bobot.ahp.edit',$ahp->id_perhitungan) }}">Edit</a>

                            @endif


                            @if ($ahp->id_perhitungan !== 1 && !$ahp->is_created_by_admin)
                            {!! $html->form()->action(route('user.bobot.ahp.destroy',
                            $ahp->id_perhitungan))->method('DELETE')->style('display:inline')->open() !!}
                            {!! $html->submit('Delete')->class('text-white bg-green-700 hover:bg-green-800
                            focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5
                            py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700
                            dark:focus:ring-green-800 ') !!}
                            {!! $html->form()->close() !!}

                            @endif

                            @if (!($this_user->id_perhitungan_aktif === $ahp->id_perhitungan) && $ahp->is_konsisten)
                            {!! $html->form()->action(route('user.bobot.ahp.toggle',
                            $ahp->id_perhitungan))->method('POST')->style('display:inline')->open() !!}
                            {!! $html->submit('Set Aktif')->class('focus:outline-none text-white bg-red-700
                            hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5
                            me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900') !!}
                            {!! $html->form()->close() !!}

                            @else
                            @if ($this_user->id_perhitungan_aktif === $ahp->id_perhitungan)

                            @else
                            <a class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                                disabled>Set Aktif</a>
                            @endif

                            @endif

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </x-slot>
</x-app-layout>