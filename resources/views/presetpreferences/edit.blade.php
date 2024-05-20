<x-app-layout>
    @section('title', 'Presetreference')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit Presetrepreference') }}
            </h2>

        </div>
    </x-slot>
    <form id="presetpreferenceEditForm" action="{{ route('presetpreferences.update',$presetpreference->id) }}"
        method="POST">
        @csrf
        @method('PUT')
    <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2y"
        href="{{ route('presetpreferences.index') }}"> Back</a>
    <noscript>
        <input type="submit" value="Submit form!" />
    </noscript>
    <button type="submit"
        class="inline-block text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>

        <div
            class="block max-w-sm p-6 bg-white mt-5 mx-auto border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">
            <div class="column">
                <div class="px-4 py-3">

                    <strong>Preset Preference Name:</strong>
                    <input type="text" name="name" value="{{ $presetpreference->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Name" required>
                     </div>
                        <div class="px-4 py-3">

                            <strong>Harga:</strong>
                            <input type="number" name="harga" value="{{ $presetpreference->harga }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga " min=0 required>

                        </div>
                        <div class="px-4 py-3">
                            <strong>Perizinan Regulasi: </strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="perizinan_regulasi">
                                <option value="50" {{ $presetpreference->perizinan_regulasi == 50? 'selected' : ''
                                    }}>Mudah
                                </option>
                                <option value="100" {{ $presetpreference->perizinan_regulasi == 100 ? 'selected' : ''
                                    }}>Sedang</option>
                                <option value="150" {{ $presetpreference->perizinan_regulasi == 150 ? 'selected' : ''
                                    }}>Sulit</option>
                                <option value="200" {{ $presetpreference->perizinan_regulasi == 200 ? 'selected' : ''
                                    }}>Sangat Sulit</option>
                            </select>

                        </div>
                        <div class="px-4 py-3">

                            <strong>Ketersediaan Air:</strong>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ketersediaan_air">
                                <option value="50" {{ $presetpreference->ketersediaan_air == 50? 'selected' : ''
                                    }}>Tersedia
                                    Sepenuhnya</option>
                                <option value="100" {{ $presetpreference->ketersediaan_air == 100 ? 'selected' : ''
                                    }}>Tersedia Dengan Baik</option>
                                <option value="150" {{ $presetpreference->ketersediaan_air == 150 ? 'selected' : ''
                                    }}>Ketersediaan Terbatas</option>
                                <option value="200" {{ $presetpreference->ketersediaan_air == 200 ? 'selected' : ''
                                    }}>Ketersediaan Terbatas Sekali</option>
                            </select>

                        </div>

                </div>

                <div class="column">
                    <div class="px-4 py-3">

                        <strong>Lokasi:</strong>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="lokasi">
                            <option value="50" {{ $presetpreference->lokasi == 50? 'selected' : '' }}>Dekat</option>
                            <option value="100" {{ $presetpreference->lokasi == 100 ? 'selected' : '' }}>Agak Jauh
                            </option>
                            <option value="150" {{ $presetpreference->lokasi == 150 ? 'selected' : '' }}>Jauh</option>
                            <option value="200" {{ $presetpreference->lokasi == 200 ? 'selected' : '' }}>Sangat Jauh
                            </option>
                        </select>

                    </div>
                    <div class="px-4 py-3">

                        <strong>Potensi Produksi:</strong>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="potensi_produksi">
                            <option value="50" {{ $presetpreference->potensi_produksi == 50 ? 'selected' : ''
                                }}>Produktif</option>
                            <option value="100" {{ $presetpreference->potensi_produksi == 100 ? 'selected' : ''
                                }}>Stabil</option>
                            <option value="150" {{ $presetpreference->potensi_produksi == 150 ? 'selected' : ''
                                }}>Menengah</option>
                            <option value="200" {{ $presetpreference->potensi_produksi == 200 ? 'selected' : ''
                                }}>Rendah</option>
                        </select>

                    </div>
                    <div class="px-4 py-3">

                        <strong>Aksesibilitas:</strong>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="aksesibilitas">
                            <option value="50" {{ $presetpreference->aksesibilitas == 50? 'selected' : '' }}>Sangat
                                Mudah Diakses</option>
                            <option value="100" {{ $presetpreference->aksesibilitas == 100 ? 'selected' : '' }}>Mudah
                                Diakses</option>
                            <option value="150" {{ $presetpreference->aksesibilitas == 150 ? 'selected' : '' }}>Agak
                                Sulit Diakses</option>
                            <option value="200" {{ $presetpreference->aksesibilitas == 200 ? 'selected' : '' }}>Sangat
                                Sulit Diakses</option>
                        </select>

                    </div>
                    <div class="px-4 py-3">

                        <strong>Kondisi Lingkungan:</strong>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kondisi_lingkungan">
                            <option value="50" {{ $presetpreference->kondisi_lingkungan == 50? 'selected' : '' }}>Baik
                            </option>
                            <option value="100" {{ $presetpreference->kondisi_lingkungan == 100 ? 'selected' : ''
                                }}>Cukup</option>
                            <option value="150" {{ $presetpreference->kondisi_lingkungan == 150 ? 'selected' : ''
                                }}>Buruk</option>
                            <option value="200" {{ $presetpreference->kondisi_lingkungan == 200 ? 'selected' : ''
                                }}>Sangat Buruk</option>
                        </select>
                    </div>


                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Detail:</strong>
                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:150px" name="detail"
                        placeholder="Detail">{{ $presetpreference->detail }}</textarea>
                </div>


            </div>

    </form>
</x-app-layout>