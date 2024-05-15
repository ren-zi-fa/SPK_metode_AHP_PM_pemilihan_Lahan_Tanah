<?php

namespace Database\Seeders;

use App\Models\PresetPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresetPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $presetpreferences =
        [

            [
                'nama' => 'Cari Tanah  Heru',
                'detail' => 'luas 2 hektar',
                'harga' => '20000000000',
                'perizinan_regulasi' => '100',
                'ketersediaan_air' => '150',
                'lokasi' => '200',
                'potensi_produksi' => '50',
                'aksesibilitas' => '100',
                'kondisi_lingkungan' => '200',
            ],
            [
                'nama' => 'Cari Tanah  Andi',
                'detail' => 'luas 8 hektar',
                'harga' => '60000000000',
                'perizinan_regulasi' => '100',
                'ketersediaan_air' => '150',
                'lokasi' => '200',
                'potensi_produksi' => '150',
                'aksesibilitas' => '100',
                'kondisi_lingkungan' => '200',
            ],
            [
                'nama' => 'Cari Tanah  Budi',
                'detail' => 'luas 4 hektar',
                'harga' => '4300000000',
                'perizinan_regulasi' => '4.5',
                'ketersediaan_air' => '9.2',
                'lokasi' => '2.0',
                'potensi_produksi' => '5.7',
                'aksesibilitas' => '100',
                'kondisi_lingkungan' => '200',
            ],

        ];
    foreach ($presetpreferences as $presetpreference) {
        PresetPreference::create(
            [
                'name' => $presetpreference['nama'],
                'detail' => $presetpreference['detail'],
                'harga' => $presetpreference['harga'],
                'perizinan_regulasi' => $presetpreference['perizinan_regulasi'],
                'ketersediaan_air' => $presetpreference['ketersediaan_air'],
                'lokasi' => $presetpreference['lokasi'],
                'potensi_produksi' => $presetpreference['potensi_produksi'],
                'aksesibilitas' => $presetpreference['aksesibilitas'],
                'kondisi_lingkungan' => $presetpreference['kondisi_lingkungan'],
            ]
            
        );
    }
    }
}
