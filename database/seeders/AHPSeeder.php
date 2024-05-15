<?php

namespace Database\Seeders;

use App\Models\AHP;
use App\Models\Bobot;
use App\Models\PerbandinganBerpasangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AHPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ahp = AHP::create([
            'nama_perhitungan' => 'AHP 1',
            'is_konsisten'     => 1,
            'is_created_by_admin'=> 1,
            'creator_id'       => 1,
            'detail'           => 'Pembobotan AHP-1 by admin'
        ]);

        $kriterias = 
        [
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C1',
                'c1'  => '1.0',
                'c2'  => '4.0',
                'c3'  => '0.5',
                'c4'  => '7.0',
                'c5'  => '0.5',
                'c6'  => '4.0',
                'c7'  => '0.5',
                
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C2',
                'c1'  => '0.25',
                'c2'  => '1.0',
                'c3'  => '0.17',
                'c4'  => '6.0',
                'c5'  => '0.25',
                'c6'  => '1.0',
                'c7'  => '0.17',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C3',
                'c1'  => '2.0',
                'c2'  => '6.0',
                'c3'  => '1.0',
                'c4'  => '9.0',
                'c5'  => '2.0',
                'c6'  => '6.0',
                'c7'  => '1.0',
               
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C4',
                'c1'  => '0.14',
                'c2'  => '0.17',
                'c3'  => '0.11',
                'c4'  => '1.0',
                'c5'  => '0.14',
                'c6'  => '0.25',
                'c7'  => '0.11',
         
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C5',
                'c1'  => '2.0',
                'c2'  => '4.0',
                'c3'  => '0.5',
                'c4'  => '7.0',
                'c5'  => '1.0',
                'c6'  => '4.0',
                'c7'  => '1.0',
                
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C6',
                'c1'  => '0.25',
                'c2'  => '1.0',
                'c3'  => '0.17',
                'c4'  => '4.0',
                'c5'  => '0.25',
                'c6'  => '1.0',
                'c7'  => '0.25',
                
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C7',
                'c1'  => '2.0',
                'c2'  => '6.0',
                'c3'  => '1.0',
                'c4'  => '9.0',
                'c5'  => '1.0',
                'c6'  => '4.0',
                'c7'  => '1.0',
              
            ],
      
        ];

        foreach ($kriterias as $kriteria) {
            PerbandinganBerpasangan::create(
                [
                    'id_perhitungan'    => $kriteria['id_perhitungan'],
                    'nama_kriteria'     => $kriteria['nama_kriteria'],
                    'c1'                => $kriteria['c1'],
                    'c2'                => $kriteria['c2'],
                    'c3'                => $kriteria['c3'],
                    'c4'                => $kriteria['c4'],
                    'c5'                => $kriteria['c5'],
                    'c6'                => $kriteria['c6'],
                    'c7'                => $kriteria['c7'],
                 
                ]
            );
        }

        Bobot::create([
            'id_perhitungan' => $ahp->id_perhitungan,
            // 'nama_kriteria'  => 'c12',
            'c1'  => '0.13',
            'c2'  => '0.04',
            'c3'  => '0.2',
            'c4'  => '0.01',
            'c5'  => '0.15',
            'c6'  => '0.04',
            'c7'  => '0.19',
            

            'lamda_max' => '12.56',
            'consistency_index' => '0.05',
            'consistency_ratio' => '0.033',
        ]);

        // --------------------------------------------
        // data ke 3 pembobotan AHP Bobot fokus C1, C3, C5
        // --------------------------------------------
        // --------------------------------------------
        // data ke 3 pembobotan AHP Bobot fokus C1, C3, C5
        // --------------------------------------------

        $ahp = AHP::create([
            'nama_perhitungan' => 'AHP-2',
            'is_konsisten'     => 1,
            'is_created_by_admin'=> 1,
            'creator_id'       => 1,
            'detail'           => 'Bobot fokus C1, C3, C5'
        ]);

        $kriterias = 
        [
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C1',
                'c1'  => '1',
                'c2'  => '1',
                'c3'  => '3',
                'c4'  => '7',
                'c5'  => '2',
                'c6'  => '4',
                'c7'  => '3',
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C2',
                'c1'  => '1',
                'c2'  => '1',
                'c3'  => '0.17',
                'c4'  => '6',
                'c5'  => '0.25',
                'c6'  => '1',
                'c7'  => '0.17',
               
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C3',
                'c1'  => '0.33',
                'c2'  => '6',
                'c3'  => '1',
                'c4'  => '9',
                'c5'  => '2',
                'c6'  => '6',
                'c7'  => '1',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C4',
                'c1'  => '0.14',
                'c2'  => '0.17',
                'c3'  => '0.11',
                'c4'  => '1',
                'c5'  => '0.14',
                'c6'  => '0.25',
                'c7'  => '0.11',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C5',
                'c1'  => '0.5',
                'c2'  => '4',
                'c3'  => '0.5',
                'c4'  => '7',
                'c5'  => '1',
                'c6'  => '4',
                'c7'  => '1',
                
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C6',
                'c1'  => '0.25',
                'c2'  => '1',
                'c3'  => '0.17',
                'c4'  => '4',
                'c5'  => '0.25',
                'c6'  => '1',
                'c7'  => '1',
             
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C7',
                'c1'  => '0.33',
                'c2'  => '6',
                'c3'  => '1',
                'c4'  => '9',
                'c5'  => '1',
                'c6'  => '1',
                'c7'  => '1',
                
            ],
     
        ];

        foreach ($kriterias as $kriteria) {
            PerbandinganBerpasangan::create(
                [
                    'id_perhitungan'    => $kriteria['id_perhitungan'],
                    'nama_kriteria'     => $kriteria['nama_kriteria'],
                    'c1'                => $kriteria['c1'],
                    'c2'                => $kriteria['c2'],
                    'c3'                => $kriteria['c3'],
                    'c4'                => $kriteria['c4'],
                    'c5'                => $kriteria['c5'],
                    'c6'                => $kriteria['c6'],
                    'c7'                => $kriteria['c7'],
                  
                ]
            );
        }

        Bobot::create([
            'id_perhitungan' => $ahp->id_perhitungan,
            // 'nama_kriteria'  => 'c12',
            'c1'  => '0.18955082791729',
            'c2'  => '0.054714087157006',
            'c3'  => '0.19861553016693',
            'c4'  => '0.013047521450412',
            'c5'  => '0.14888659466074',
            'c6'  => '0.047484205390588',
            'c7'  => '0.087678437357476',
           

            'lamda_max' => '13.354655868474',
            'consistency_index' => '0.12315053349762',
            'consistency_ratio' => '0.079967878894555',
        ]);


                // --------------------------------------------
        // data ke 3 pembobotan AHP Bobot fokus C1, C2, C3, C5
        // --------------------------------------------
        // --------------------------------------------
        // data ke 3 pembobotan AHP Bobot fokus C1, C2, C3, C5
        // --------------------------------------------

        $ahp = AHP::create([
            'nama_perhitungan' => 'AHP-3',
            'is_konsisten'     => 1,
            'is_created_by_admin'=> 1,
            'creator_id'       => 1,
            'detail'           => 'Bobot fokus C1, C2, C3, C5'
        ]);

        $kriterias = 
        [
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C1',
                'c1'  => '1',
                'c2'  => '1',
                'c3'  => '3',
                'c4'  => '7',
                'c5'  => '2',
                'c6'  => '4',
                'c7'  => '3',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C2',
                'c1'  => '1',
                'c2'  => '1',
                'c3'  => '2',
                'c4'  => '6',
                'c5'  => '2',
                'c6'  => '4',
                'c7'  => '2',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C3',
                'c1'  => '0.33',
                'c2'  => '0.5',
                'c3'  => '1',
                'c4'  => '9',
                'c5'  => '2',
                'c6'  => '4',
                'c7'  => '1',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C4',
                'c1'  => '0.14',
                'c2'  => '0.17',
                'c3'  => '0.11',
                'c4'  => '1',
                'c5'  => '0.14',
                'c6'  => '0.25',
                'c7'  => '0.11',
              
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C5',
                'c1'  => '0.5',
                'c2'  => '0.5',
                'c3'  => '0.5',
                'c4'  => '7',
                'c5'  => '1',
                'c6'  => '4',
                'c7'  => '1',
           
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C6',
                'c1'  => '0.25',
                'c2'  => '0.25',
                'c3'  => '0.25',
                'c4'  => '4',
                'c5'  => '0.25',
                'c6'  => '1',
                'c7'  => '1',
               
            ],
            [
                'id_perhitungan' => $ahp->id_perhitungan,
                'nama_kriteria'  => 'C7',
                'c1'  => '0.33',
                'c2'  => '0.5',
                'c3'  => '1',
                'c4'  => '9',
                'c5'  => '1',
                'c6'  => '1',
                'c7'  => '1',
              
            ],
        
        ];

        foreach ($kriterias as $kriteria) {
            PerbandinganBerpasangan::create(
                [
                    'id_perhitungan'    => $kriteria['id_perhitungan'],
                    'nama_kriteria'     => $kriteria['nama_kriteria'],
                    'c1'                => $kriteria['c1'],
                    'c2'                => $kriteria['c2'],
                    'c3'                => $kriteria['c3'],
                    'c4'                => $kriteria['c4'],
                    'c5'                => $kriteria['c5'],
                    'c6'                => $kriteria['c6'],
                    'c7'                => $kriteria['c7'],
                 
                ]
            );
        }

        Bobot::create([
            'id_perhitungan' => $ahp->id_perhitungan,
            // 'nama_kriteria'  => 'c12',
            'c1'  => '0.18246575717974',
            'c2'  => '0.15766014561917',
            'c3'  => '0.14531652805392',
            'c4'  => '0.014178388240354',
            'c5'  => '0.13743511864852',
            'c6'  => '0.045830473977175',
            'c7'  => '0.070326061772319',
           

            'lamda_max' => '12.750519198851',
            'consistency_index' => '0.068229018077331',
            'consistency_ratio' => '0.044304557193072',
        ]);

    }
}
