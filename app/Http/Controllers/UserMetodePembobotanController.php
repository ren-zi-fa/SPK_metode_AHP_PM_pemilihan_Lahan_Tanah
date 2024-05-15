<?php

namespace App\Http\Controllers;

use App\Models\AHP;
use App\Models\Bobot;
use App\Models\BobotLangsung;
use App\Models\PerbandinganBerpasangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserMetodePembobotanController extends Controller
{
    protected $product_atribute_required = array(
        'harga'             => 'required|numeric|between:0,10',
        'perizinan_regulasi'          => 'required|numeric|between:0,10',
        'ketersediaan_air'     => 'required|numeric|between:0,10',
        'lokasi'     => 'required|numeric|between:0,10',
        'potensi_produksi'     => 'required|numeric|between:0,10',
        'aksesibilitas'    => 'required|numeric|between:0,10',
        'kondisi_lingkungan'  => 'required|numeric|between:0,64',
    
    );
    protected $ahp_atribute_required = array(
        'nama_perhitungan'      => 'required',
        'detail'    => '',
        'c1c2'      => 'required|numeric|between:0,9',
        'c1c3'      => 'required|numeric|between:0,9',
        'c1c4'      => 'required|numeric|between:0,9',
        'c1c5'      => 'required|numeric|between:0,9',
        'c1c6'      => 'required|numeric|between:0,9',
        'c1c7'      => 'required|numeric|between:0,9',
        'c2c3'      => 'required|numeric|between:0,9',
        'c2c4'      => 'required|numeric|between:0,9',
        'c2c5'      => 'required|numeric|between:0,9',
        'c2c6'      => 'required|numeric|between:0,9',
        'c2c7'      => 'required|numeric|between:0,9',
        'c3c4'      => 'required|numeric|between:0,9',
        'c3c5'      => 'required|numeric|between:0,9',
        'c3c6'      => 'required|numeric|between:0,9',
        'c3c7'      => 'required|numeric|between:0,9',

        'c4c5'      => 'required|numeric|between:0,9',
        'c4c6'      => 'required|numeric|between:0,9',
        'c4c7'      => 'required|numeric|between:0,9',

        'c5c6'      => 'required|numeric|between:0,9',
        'c5c7'      => 'required|numeric|between:0,9',

        'c6c7'      => 'required|numeric|between:0,9',
    );
    public function ahp_index()
    {
        $this_user = User::where('id', Auth::id())->first();
        $ahplist = DB::table('ahp')
            ->select('*')
            ->where('ahp.is_created_by_admin', 1)
            ->orWhere('ahp.creator_id', $this_user->id)
            ->latest()->get();

        return view('user_bobot.ahp.index', compact('ahplist', 'this_user'));
    }
    public function ahp_create()
    {
        return view('user_bobot.ahp.create');
    }
    public function ahp_store(Request $request)
    {
        request()->validate($this->ahp_atribute_required);

        // fungsi untuk membulatkan nilai
        function round_if($value)
        {
            if ($value >= 9) {
                return 9;
            } elseif ($value >= 1) {
                return round($value);
            } else {
                return round($value, 2);
            }
        }

        if (true) {
        
            $request->c1c2 = round_if($request->c1c2);
            $request->c1c3 = round_if($request->c1c3);
            $request->c1c4 = round_if($request->c1c4);
            $request->c1c5 = round_if($request->c1c5);
            $request->c1c6 = round_if($request->c1c6);
            $request->c1c7 = round_if($request->c1c7);

            $request->c2c3 = round_if($request->c2c3);
            $request->c2c4 = round_if($request->c2c4);
            $request->c2c5 = round_if($request->c2c5);
            $request->c2c6 = round_if($request->c2c6);
            $request->c2c7 = round_if($request->c2c7);


            $request->c3c4 = round_if($request->c3c4);
            $request->c3c5 = round_if($request->c3c5);
            $request->c3c6 = round_if($request->c3c6);
            $request->c3c7 = round_if($request->c3c7);
            $request->c4c5 = round_if($request->c4c5);
            $request->c4c6 = round_if($request->c4c6);
            $request->c4c7 = round_if($request->c4c7);

            $request->c5c6 = round_if($request->c5c6);
            $request->c5c7 = round_if($request->c5c7);

            $request->c6c7 = round_if($request->c6c7);




            // inisiasi nilai bagian segitaga
            // bawah pada tabel (1 / request->xxxx)
            $c2c1 = round_if(1 / $request->c1c2);
            $c3c1 = round_if(1 / $request->c1c3);
            $c4c1 = round_if(1 / $request->c1c4);
            $c5c1 = round_if(1 / $request->c1c5);
            $c6c1 = round_if(1 / $request->c1c6);
            $c7c1 = round_if(1 / $request->c1c7);


            $c3c2 = round_if(1 / $request->c2c3);
            $c4c2 = round_if(1 / $request->c2c4);
            $c5c2 = round_if(1 / $request->c2c5);
            $c6c2 = round_if(1 / $request->c2c6);
            $c7c2 = round_if(1 / $request->c2c7);

            $c4c3 = round_if(1 / $request->c3c4);
            $c5c3 = round_if(1 / $request->c3c5);
            $c6c3 = round_if(1 / $request->c3c6);
            $c7c3 = round_if(1 / $request->c3c7);

            $c5c4 = round_if(1 / $request->c4c5);
            $c6c4 = round_if(1 / $request->c4c6);
            $c7c4 = round_if(1 / $request->c4c7);

            $c6c5 = round_if(1 / $request->c5c6);
            $c7c5 = round_if(1 / $request->c5c7);

            $c7c6 = round_if(1 / $request->c6c7);
        }


        $c1 = array();
        $c2 = array();
        $c3 = array();
        $c4 = array();
        $c5 = array();
        $c6 = array();
        $c7 = array();


        $initial_full_ahp_arr = array();

        // bangun tabel dan array
        if (true) {

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Potongan Gambar Kiri                                                                            // Potongan Gambar Kanan
            array_push($c1, 1, $request->c1c2, $request->c1c3, $request->c1c4, $request->c1c5, $request->c1c6, $request->c1c7);
            array_push($c2, $c2c1, 1, $request->c2c3, $request->c2c4, $request->c2c5, $request->c2c6, $request->c2c7);
            array_push($c3, $c3c1, $c3c2, 1, $request->c3c4, $request->c3c5, $request->c3c6, $request->c3c7);
            array_push($c4, $c4c1, $c4c2, $c4c3, 1, $request->c4c5, $request->c4c6, $request->c4c7);
            array_push($c5, $c5c1, $c5c2, $c5c3, $c5c4, 1, $request->c5c6, $request->c5c7);
            array_push($c6, $c6c1, $c6c2, $c6c3, $c6c4, $c6c5, 1, $request->c6c7);
            array_push($c7, $c7c1, $c7c2, $c7c3, $c7c4, $c7c5, $c7c6, 1);


            array_push($initial_full_ahp_arr, $c1, $c2, $c3, $c4, $c5, $c6, $c7);
        }

        // (https://stackoverflow.com/questions/797251/transposing-multidimensional-arrays-in-php)

        // fungsi transpose 
        function transpose($array)
        {
            return array_map(null, ...$array);
        }

        // transpose matriks untuk mempermudah dalam jumlahkan kolum kemudian rij / sumCol_j
        $transpose_initial_full_ahp_arr = transpose($initial_full_ahp_arr);

        // normalisasi
        $normalized_ahp_arr = array();
        foreach ($transpose_initial_full_ahp_arr as $column) {
            $temp_sum = array_sum($column);

            foreach ($column as $key => $value) {
                $column[$key] = $value / $temp_sum;
            }
            array_push($normalized_ahp_arr, $column);
        }

        // didapatkan matriks ahp yang ternormalisasi
        $normalized_ahp_arr = transpose($normalized_ahp_arr);

        // dapatkan bobot tiap kriteria
        $bobot_tiap_kriteria = array();
        foreach ($normalized_ahp_arr as $row) {
            array_push($bobot_tiap_kriteria, array_sum($row) / count($row));
        }

        // Code dibawah berikut mulai pengecekan nilai konsistensi

        // hitung nilai WSV
        $WSV_arr = $initial_full_ahp_arr;

        $WSV_value = array();
        foreach ($WSV_arr as $row) {
            $sum = 0;
            foreach ($row as $key => $value) {
                $sum = $sum + ($value * $bobot_tiap_kriteria[$key]);
            }
            array_push($WSV_value, $sum);
        }

        // hitung nilai CV 
        $CV_value = array();
        foreach ($WSV_value as $key => $value) {
            array_push($CV_value, $value / $bobot_tiap_kriteria[$key]);
        }

        // hitung lamdaMax (rata-rata CV)
        $banyak_kriteria = count($CV_value);
        $lamdaMax = array_sum($CV_value) / $banyak_kriteria;

        // hitung nilai Consistency Index (CI)
        $CI_value = ($lamdaMax - $banyak_kriteria) / ($banyak_kriteria - 1);

        // hitung nilai Consistency Ratio (CR)
        $RandomConsistency = 1.54;
        $CR_value = $CI_value / $RandomConsistency;

        // dd($CR_value);

        // + validasi inputan
        // ide selanjutnya jika konsisten maka return konsisten, redirect ke ahp.index (kyknya mending), kasih pesan konsisten
        // (kyknya mending kasih redirect ke edit, ) didalam tampilan ahp.edit nanti kasih perhitungan men-DETAIL nya
        // kasih tampilan

        if (true) {
            $col_1 = array_column($initial_full_ahp_arr, 0);
            $col_2 = array_column($initial_full_ahp_arr, 1);
            $col_3 = array_column($initial_full_ahp_arr, 2);
            $col_4 = array_column($initial_full_ahp_arr, 3);
            $col_5 = array_column($initial_full_ahp_arr, 4);
            $col_6 = array_column($initial_full_ahp_arr, 5);
            $col_7 = array_column($initial_full_ahp_arr, 6);
            $col_8 = array_column($initial_full_ahp_arr, 7);
            $col_9 = array_column($initial_full_ahp_arr, 8);
            $col_10 = array_column($initial_full_ahp_arr, 9);
            $col_11 = array_column($initial_full_ahp_arr, 10);
            $col_12 = array_column($initial_full_ahp_arr, 11);



            $sum_col_1 = array_sum($col_1);
            $sum_col_2 = array_sum($col_2);
            $sum_col_3 = array_sum($col_3);
            $sum_col_4 = array_sum($col_4);
            $sum_col_5 = array_sum($col_5);
            $sum_col_6 = array_sum($col_6);
            $sum_col_7 = array_sum($col_7);
            $sum_col_8 = array_sum($col_8);
            $sum_col_9 = array_sum($col_9);
            $sum_col_10 = array_sum($col_10);
            $sum_col_11 = array_sum($col_11);
            $sum_col_12 = array_sum($col_12);

            // foreach ($variable as $key => $value) {
            //     # code...
            // }
        }



        // dd($sum_col_12);

        $is_konsisten = ($CR_value < 0.1) ? true : false;

        $created_by_admin = (Auth::user()->hasRole('Admin')) ? 1 : 0;

        $ahp_obj = AHP::create(
            [
                'nama_perhitungan' => $request->nama_perhitungan,
                'detail'           => $request->detail,
                'is_konsisten'     => $is_konsisten,
                'is_created_by_admin' => $created_by_admin,
                'creator_id' => Auth::id(),
            ]
        );


        // dd($ahp_obj->id);

        $bobot_eloquent_obj = Bobot::create(
            [
                'id_perhitungan'   => $ahp_obj->id_perhitungan,
                'c1'   => $bobot_tiap_kriteria[0],
                'c2'   => $bobot_tiap_kriteria[1],
                'c3'   => $bobot_tiap_kriteria[2],
                'c4'   => $bobot_tiap_kriteria[3],
                'c5'   => $bobot_tiap_kriteria[4],
                'c6'   => $bobot_tiap_kriteria[5],
                'c7'   => $bobot_tiap_kriteria[6],


                'lamda_max' => $lamdaMax,
                'consistency_index' => $CI_value,
                'consistency_ratio' => $CR_value
            ]
        );

        foreach ($initial_full_ahp_arr as $key => $crit) {
            $perbandingan_berpasangan_elo_obj = PerbandinganBerpasangan::create([
                'id_perhitungan'    => $ahp_obj->id_perhitungan,
                'nama_kriteria'     => 'C' . ($key + 1),
                'c1'    => $crit[0],
                'c2'    => $crit[1],
                'c3'    => $crit[2],
                'c4'    => $crit[3],
                'c5'    => $crit[4],
                'c6'    => $crit[5],
                'c7'    => $crit[6],


            ]);
        }




        if ($is_konsisten) {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('success', 'Perhitungan AHP berhasil ditambahkan.
                        Perbandingan berpasangan antar kriteria SUDAH konsisten karena nilai Consitency Ratio < 0,1');
        } elseif (!$is_konsisten) {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('error', 'Perhitungan AHP berhasil ditambahkan.
                        Perbandingan berpasangan antar kriteria BELUM konsisten karena nilai Consitency Ratio >= 0,1');
        } else {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('error', 'ooppss something wrong');
        }
    }
    public function ahp_show($id)
    {
        $ahp = AHP::where('id_perhitungan', '=', $id)->first();
        $bobot = Bobot::where('id_perhitungan', '=', $id)->first();
        $PB_obj = PerbandinganBerpasangan::where('id_perhitungan', '=', $id)->get();

        return view('user_bobot.ahp.show', compact('ahp', 'bobot', 'PB_obj'));
    }
    public function ahp_edit(AHP $ahp_obj, $id)
    {
        $ahp = AHP::where('id_perhitungan', '=', $id)->first();
        $bobot = Bobot::where('id_perhitungan', '=', $id)->first();
        $PB_obj = PerbandinganBerpasangan::where('id_perhitungan', '=', $id)->get();

        return view('user_bobot.ahp.edit', compact('ahp', 'bobot', 'PB_obj'));
    }
    public function ahp_update(Request $request, $id_get)
    {
        // dd($id_get);
        // dd($request->all());
        request()->validate($this->ahp_atribute_required);

        function round_if($value)
        {
            if ($value >= 9) {
                return 9;
            } elseif ($value >= 1) {
                return round($value);
            } else {
                return round($value, 2);
            }
        }

        // inisiasi nilai bagian segitaga bawah pada tabel (1 / request->xxxx)
        if (true) {
            // bulatkan dulu menggunakan fungsi round_if pada masukan user
            $request->c1c2 = round_if($request->c1c2);
            $request->c1c3 = round_if($request->c1c3);
            $request->c1c4 = round_if($request->c1c4);
            $request->c1c5 = round_if($request->c1c5);
            $request->c1c6 = round_if($request->c1c6);
            $request->c1c7 = round_if($request->c1c7);
            $request->c2c3 = round_if($request->c2c3);
            $request->c2c4 = round_if($request->c2c4);
            $request->c2c5 = round_if($request->c2c5);
            $request->c2c6 = round_if($request->c2c6);
            $request->c2c7 = round_if($request->c2c7);
            $request->c3c4 = round_if($request->c3c4);
            $request->c3c5 = round_if($request->c3c5);
            $request->c3c6 = round_if($request->c3c6);
            $request->c3c7 = round_if($request->c3c7);

            $request->c4c5 = round_if($request->c4c5);
            $request->c4c6 = round_if($request->c4c6);
            $request->c4c7 = round_if($request->c4c7);

            $request->c5c6 = round_if($request->c5c6);
            $request->c5c7 = round_if($request->c5c7);

            $request->c6c7 = round_if($request->c6c7);




            // inisiasi nilai bagian segitaga bawah pada tabel (1 / request->xxxx)
            $c2c1 = round_if(1 / $request->c1c2);
            $c3c1 = round_if(1 / $request->c1c3);
            $c4c1 = round_if(1 / $request->c1c4);
            $c5c1 = round_if(1 / $request->c1c5);
            $c6c1 = round_if(1 / $request->c1c6);
            $c7c1 = round_if(1 / $request->c1c7);
            $c3c2 = round_if(1 / $request->c2c3);
            $c4c2 = round_if(1 / $request->c2c4);
            $c5c2 = round_if(1 / $request->c2c5);
            $c6c2 = round_if(1 / $request->c2c6);
            $c7c2 = round_if(1 / $request->c2c7);
            $c4c3 = round_if(1 / $request->c3c4);
            $c5c3 = round_if(1 / $request->c3c5);
            $c6c3 = round_if(1 / $request->c3c6);
            $c7c3 = round_if(1 / $request->c3c7);

            $c5c4 = round_if(1 / $request->c4c5);
            $c6c4 = round_if(1 / $request->c4c6);
            $c7c4 = round_if(1 / $request->c4c7);

            $c6c5 = round_if(1 / $request->c5c6);
            $c7c5 = round_if(1 / $request->c5c7);

            $c7c6 = round_if(1 / $request->c6c7);
        }

        $c1 = array();
        $c2 = array();
        $c3 = array();
        $c4 = array();
        $c5 = array();
        $c6 = array();
        $c7 = array();


        $initial_full_ahp_arr = array();

        // bangun tabel dan array
        if (true) {
            array_push($c1, 1, $request->c1c2, $request->c1c3, $request->c1c4, $request->c1c5, $request->c1c6, $request->c1c7);
            array_push($c2, $c2c1, 1, $request->c2c3, $request->c2c4, $request->c2c5, $request->c2c6, $request->c2c7);
            array_push($c3, $c3c1, $c3c2, 1, $request->c3c4, $request->c3c5, $request->c3c6, $request->c3c7);
            array_push($c4, $c4c1, $c4c2, $c4c3, 1, $request->c4c5, $request->c4c6, $request->c4c7);
            array_push($c5, $c5c1, $c5c2, $c5c3, $c5c4, 1, $request->c5c6, $request->c5c7);
            array_push($c6, $c6c1, $c6c2, $c6c3, $c6c4, $c6c5, 1, $request->c6c7);
            array_push($c7, $c7c1, $c7c2, $c7c3, $c7c4, $c7c5, $c7c6, 1);



            array_push($initial_full_ahp_arr, $c1, $c2, $c3, $c4, $c5, $c6, $c7);
        }


        // fungsi transpose (https://stackoverflow.com/questions/797251/transposing-multidimensional-arrays-in-php)
        function transpose($array)
        {
            return array_map(null, ...$array);
        }

        // transpose matriks untuk mempermudah dalam jumlahkan kolum kemudian rij / sumCol_j
        $transpose_initial_full_ahp_arr = transpose($initial_full_ahp_arr);

        // normalisasi
        $normalized_ahp_arr = array();
        foreach ($transpose_initial_full_ahp_arr as $column) {
            $temp_sum = array_sum($column);

            foreach ($column as $key => $value) {
                $column[$key] = $value / $temp_sum;
            }
            array_push($normalized_ahp_arr, $column);
        }


        $normalized_ahp_arr = transpose($normalized_ahp_arr);


        $bobot_tiap_kriteria = array();
        foreach ($normalized_ahp_arr as $arr) {
            array_push($bobot_tiap_kriteria, array_sum($arr) / count($arr));
        }


        // hitung nilai WSV
        $WSV_arr = $initial_full_ahp_arr;

        $WSV_value = array();
        foreach ($WSV_arr as $arr) {
            $temp = 0;
            foreach ($arr as $key => $value) {
                $temp = $temp + ($value * $bobot_tiap_kriteria[$key]);
            }
            array_push($WSV_value, $temp);
        }

        // hitung nilai CV 
        $CV_value = array();
        foreach ($WSV_value as $key => $value) {
            array_push($CV_value, $value / $bobot_tiap_kriteria[$key]);
        }

        // hitung lamdaMax (rata-rata CV)
        $banyak_kriteria = count($CV_value);
        $lamdaMax = array_sum($CV_value) / $banyak_kriteria;

        // hitung nilai Consistency Index (CI)
        $CI_value = ($lamdaMax - $banyak_kriteria) / ($banyak_kriteria - 1);

        // hitung nilai Consistency Ratio (CR)
        $RandomIndex = 1.54;
        $CR_value = $CI_value / $RandomIndex;

        $is_konsisten = ($CR_value < 0.1) ? true : false;



        // update di tabel AHP di database
        $ahp_obj = AHP::where('id_perhitungan', $id_get)->first();
        // dd($ahp_obj->id_perhitungan);
        $ahp_obj->nama_perhitungan = $request->nama_perhitungan;
        $ahp_obj->detail           = $request->detail;
        $ahp_obj->is_konsisten     = $is_konsisten;

        $ahp_obj->save();
   

        // update di tabel bobot di database
        $bobot_eloquent_obj = Bobot::where('id_perhitungan', $ahp_obj->id_perhitungan)->first();

        $bobot_eloquent_obj->c1   = $bobot_tiap_kriteria[0];
        $bobot_eloquent_obj->c2   = $bobot_tiap_kriteria[1];
        $bobot_eloquent_obj->c3   = $bobot_tiap_kriteria[2];
        $bobot_eloquent_obj->c4   = $bobot_tiap_kriteria[3];
        $bobot_eloquent_obj->c5   = $bobot_tiap_kriteria[4];
        $bobot_eloquent_obj->c6   = $bobot_tiap_kriteria[5];
        $bobot_eloquent_obj->c7   = $bobot_tiap_kriteria[6];

        $bobot_eloquent_obj->lamda_max = $lamdaMax;
        $bobot_eloquent_obj->consistency_index = $CI_value;
        $bobot_eloquent_obj->consistency_ratio = $CR_value;
        $bobot_eloquent_obj->save();

       

        PerbandinganBerpasangan::where('id_perhitungan', $ahp_obj->id_perhitungan)->delete();
        // masukkan nilai ke tabel PerbandinganBerpasangan
        foreach ($initial_full_ahp_arr as $key => $crit) {
            $perbandingan_berpasangan_elo_obj = PerbandinganBerpasangan::create([
                'id_perhitungan'    => $ahp_obj->id_perhitungan,
                'nama_kriteria'     => 'C' . ($key + 1),
                'c1'    => $crit[0],
                'c2'    => $crit[1],
                'c3'    => $crit[2],
                'c4'    => $crit[3],
                'c5'    => $crit[4],
                'c6'    => $crit[5],
                'c7'    => $crit[6],

            ]);
        }
        // dd($perbandingan_berpasangan_elo_obj);


        if ($is_konsisten) {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('success', 'Perhitungan AHP berhasil diperbarui.
                         Perbandingan berpasangan antar kriteria SUDAH konsisten karena nilai Consitency Ratio < 0,1');
        } elseif (!$is_konsisten) {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('error', 'Perhitungan AHP berhasil diperbarui.
                        Perbandingan berpasangan antar kriteria BELUM konsisten karena nilai Consitency Ratio >= 0,1');
        } else {
            return redirect()->route('user.bobot.ahp.show', $ahp_obj->id_perhitungan)
                ->with('error', 'ooppss something wrong');
        }


        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }
    public function ahp_destroy($id_get_url)
    {

        AHP::where('id_perhitungan', $id_get_url)->delete();

      
        return redirect()->route('user.bobot.ahp.index')
            ->with('success', 'Perhitungan AHP berhasil dihapus');
    }
    public function ahp_toggle($id_get_url)
    {
        $this_user = User::where('id', Auth::id())->update(['id_perhitungan_aktif' => $id_get_url]);

        return redirect()->back()
            ->with('success', 'Bobot AHP yang digunakan untuk perhitungan rekomendasi berhasil diganti');
    }
    public function langsung_index()
    {
        $this_user_id = Auth::id(); // return this_user->id
        $bobot_langsung = BobotLangsung::where('id_user', $this_user_id)->first();
        // $data = 1;
        return view('user_bobot.langsung.index', compact('bobot_langsung'));
    }
    public function langsung_edit()
    {
        $this_user_id = Auth::id(); // return this_user->id
        $bobot_langsung = BobotLangsung::where('id_user', $this_user_id)->first();
        // $data = 1;
        return view('user_bobot.langsung.edit', compact('bobot_langsung'));
    }
    public function langsung_update(Request $req)
    {
        $this_user_id = Auth::id(); // return this_user->id
        $bobot_langsung = BobotLangsung::where('id_user', $this_user_id)->first();
        // $data = 1;
        $not_sum_zero_check = $req->harga + $req->perizinan_regulasi + $req->ketersediaan_air + $req->lokasi + $req->potensi_produksi +
            $req->aksesibilitas + $req->kondisi_lingkungan ;

        if ($not_sum_zero_check > 0) {
            BobotLangsung::where('id_user', $this_user_id)->update([
                'id_user' => $this_user_id,
                'c1'      => $req->harga,
                'c2'      => $req->perizinan_regulasi,
                'c3'      => $req->ketersediaan_air,
                'c4'      => $req->lokasi,
                'c5'      => $req->potensi_produksi,
                'c6'      => $req->aksesibilitas,
                'c7'      => $req->kondisi_lingkungan,

            ]);
            return redirect()->route('user.bobot.langsung.index')
                ->with('success', 'Bobot updated successfully');
        } else {
            return redirect()->route('user.bobot.langsung.edit')
                ->with('error', 'Jumlah dari bobot tidak boleh 0');
        }
    }

}
