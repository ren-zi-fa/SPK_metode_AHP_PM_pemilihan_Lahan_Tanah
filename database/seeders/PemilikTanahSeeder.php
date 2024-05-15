<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilikTanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanah =
            [

                [
                    'nama' => 'Tanah Pak Heru',
                    'detail' => 'luas 2 hektar',
                    'harga' => '2000000',
                    'perizinan_regulasi' => '10',
                    'ketersediaan_air' => '15',
                    'lokasi' => '20',
                    'potensi_produksi' => '10',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '5',
                ],
                [
                    'nama' => 'Tanah Pak Andi',
                    'detail' => 'luas 8 hektar',
                    'harga' => '600000000',
                    'perizinan_regulasi' => '10',
                    'ketersediaan_air' => '20',
                    'lokasi' => '5',
                    'potensi_produksi' => '20',
                    'aksesibilitas' => '10',
                    'kondisi_lingkungan' => '15',
                ],
                [
                    'nama' => 'Tanah Pak Budi',
                    'detail' => 'luas 4 hektar',
                    'harga' => '4300000',
                    'perizinan_regulasi' => '5',
                    'ketersediaan_air' => '10',
                    'lokasi' => '20',
                    'potensi_produksi' => '5',
                    'aksesibilitas' => '15',
                    'kondisi_lingkungan' => '20',
                ],


            ];
        foreach ($tanah as $tanahSaja) {
            Product::create(
          
                    [
                        'name' => $tanahSaja['nama'],
                        'detail' => $tanahSaja['detail'],
                        'harga' => $tanahSaja['harga'],
                        'perizinan_regulasi' => $tanahSaja['perizinan_regulasi'],
                        'ketersediaan_air' => $tanahSaja['ketersediaan_air'],
                        'lokasi' => $tanahSaja['lokasi'],
                        'potensi_produksi' => $tanahSaja['potensi_produksi'],
                        'aksesibilitas' => $tanahSaja['aksesibilitas'],
                        'kondisi_lingkungan' => $tanahSaja['kondisi_lingkungan'],
                    ]

            );
        }
    }
}
