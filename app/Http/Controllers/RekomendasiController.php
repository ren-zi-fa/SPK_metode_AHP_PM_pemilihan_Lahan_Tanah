<?php

namespace App\Http\Controllers;

use App\Models\AHP;
use App\Models\AhpPmDigunakanHasilRekomendasi;
use App\Models\Bobot;
use App\Models\BobotLangsung;
use App\Models\Favorite;
use App\Models\HasilRekomendasi;
use App\Models\PresetPreference;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekomendasiController extends Controller
{
    protected $preference_atribute_required = array(

        'harga'             => 'required',
        'perizinan_regulasi'          => 'required',
        'ketersediaan_air'     => 'required',
        'lokasi'     => 'required',
        'potensi_produksi'     => 'required',
        'aksesibilitas'    => 'required',
        'kondisi_lingkungan'  => 'required',
       
    );

    public function index(PresetPreference $presetpreference, Request $request)
    {
    
        if (!empty($presetpreference->harga)) {
            $request->session()
            ->flash('success','Nilai preset preferensi berhasil digunakan, silakan ubah sesuai preferensi Anda.'); 
        }
  
        $this_user_id = Auth::id();
        $this_user = User::where('id', $this_user_id)->first();
        

        $bobot_ahp = new Bobot();

        $is_bobot_dipilih = AHP::where('is_konsisten', '=', 1)->where('id_perhitungan', $this_user->id_perhitungan_aktif)->first();
        if (!empty($is_bobot_dipilih)) {
            $bobot_ahp = Bobot::where('id_perhitungan', '=', $is_bobot_dipilih->id_perhitungan)->first();
        }

        $bobot_langsung = BobotLangsung::where('id_user', '=', $this_user_id)->first();
        // normalisasi
        $sum = $bobot_langsung->c1 + $bobot_langsung->c2 + $bobot_langsung->c3 + $bobot_langsung->c4 + $bobot_langsung->c5 + $bobot_langsung->c6
                + $bobot_langsung->c7 ;
        $bobot_langsung->c1 = $bobot_langsung->c1 / $sum;
        $bobot_langsung->c2 = $bobot_langsung->c2 / $sum;
        $bobot_langsung->c3 = $bobot_langsung->c3 / $sum;
        $bobot_langsung->c4 = $bobot_langsung->c4 / $sum;
        $bobot_langsung->c5 = $bobot_langsung->c5 / $sum;
        $bobot_langsung->c6 = $bobot_langsung->c6 / $sum;
        $bobot_langsung->c7 = $bobot_langsung->c7 / $sum;



        return view('rekomendasi.index',compact('presetpreference', 'bobot_ahp', 'bobot_langsung'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function list()
    {
        $presetpreferences = PresetPreference::latest()->get();
        return view('rekomendasi.list_presetpreference',compact('presetpreferences'));
    }
    public function presetDetail(PresetPreference $presetpreference)
    {
        return view('rekomendasi.preset_detail',compact('presetpreference'));
    }

    public function hasil(Request $input)
    {
         {

        $this_user_id = Auth::id();


        $products = Product::leftJoin('favorites','favorites.fav_product_id','=','products.id')
        ->where('favorites.user_id', '=', $this_user_id)
        ->orWhere('favorites.fav_product_id', '=', null)
        ->orderBy('products.created_at', 'desc')
        ->get();

        $gaps = array();

        $preference_atribute = array(
            'harga'             ,
            'perizinan_regulasi',
            'ketersediaan_air'  ,
            'lokasi'     ,
            'potensi_produksi'     ,
            'aksesibilitas'    ,
            'kondisi_lingkungan'  ,
            
        );


        $products_harga            = array(); 
        $products_perizinan_regulasi    = array();
        $products_ketersediaan_air  = array();
        $products_lokasi   = array();
        $products_potensi_produksi    = array();
        $products_aksesibilitas  = array();
        $products_kondisi_lingkungan = array();
       

        $gap_harga            = array(); 
        $gap_perizinan_regulasi       = array();
        $gap_ketersediaan_air    = array();
        $gap_lokasi  = array();
        $gap_potensi_produksi   = array();
        $gap_aksesibilitas   = array();
        $gap_kondisi_lingkungan = array();
     

        // hitung gap lalu masukkan data gap ke array untuk setiap nilai kriteria pada setiap produk
        foreach ($products as $key => $product) 
        {
            array_push($gap_harga, $product->harga - $input->harga);
            array_push($gap_perizinan_regulasi, $product->perizinan_regulasi - $input->perizinan_regulasi);
            array_push($gap_ketersediaan_air,  $product->ketersediaan_air - $input->ketersediaan_air);
            array_push($gap_lokasi,  $product->lokasi - $input->lokasi);
            array_push($gap_potensi_produksi,  $product->potensi_produksi- $input->potensi_produksi);
            array_push($gap_aksesibilitas, $product->aksesibilitas - $input->aksesibilitas);
            array_push($gap_kondisi_lingkungan, $product->kondisi_lingkungan - $input->kondisi_lingkungan);
           

            array_push($products_harga,          $product->harga);
            array_push($products_perizinan_regulasi,       $product->perizinan_regulasi);
            array_push($products_ketersediaan_air,  $product->ketersediaan_air);
            array_push($products_lokasi,  $product->lokasi);
            array_push($products_potensi_produksi,  $product->potensi_produksi);
            array_push($products_aksesibilitas, $product->aksesibilitas);
            array_push($products_kondisi_lingkungan, $product->kondisi_lingkungan);
        
        }

        // kode dibawah mulai perhitungan skor tiap kriteria alternatif
        function hitungSkorBerdasarkanTabelGAP(Array $arr_gap)
        {
            foreach ($arr_gap as $key => $value) 
            {
                switch ($value) {
                    case 0  : $arr_gap[$key] = 5    ; break;
                    case 1  : $arr_gap[$key] = 4.5  ; break;
                    case -1 : $arr_gap[$key] = 4    ; break;
                    case 2  : $arr_gap[$key] = 3.5  ; break;
                    case -2 : $arr_gap[$key] = 3    ; break;
                    case 3  : $arr_gap[$key] = 2.5  ; break;
                    case -3 : $arr_gap[$key] = 2    ; break;
                    case 4  : $arr_gap[$key] = 1.5  ; break;
                    case -4 : $arr_gap[$key] = 1    ; break;
                }
            }
            return $arr_gap;
        }

      


        function hitungSkorBerdasarkanInterpolasiLinearGAP(Array $arr_gap)
        {
            $maxGAP = max($arr_gap) > abs(min($arr_gap)) ? max($arr_gap) : abs(min($arr_gap));

            foreach ($arr_gap as $key => $value) 
            {
                if (0 <= $value && $value <= $maxGAP) 
                {
                    $arr_gap[$key] = ($value - 0) / 
                                      ($maxGAP - 0) * (1 - 5) + 5;
                }
                elseif (-$maxGAP <= $value && $value < 0)
                {
                    $arr_gap[$key] = ($value - ( -$maxGAP)) / 
                                      (0 - ( -$maxGAP)) * (5 - 1) + 1;
                }
            }
            return $arr_gap;
        }

        $skor_harga            = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_harga);
        $skor_perizinan_regulasi         = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_perizinan_regulasi);
        $skor_ketersediaan_air    = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_ketersediaan_air);
        $skor_lokasi    = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_lokasi);
        $skor_potensi_produksi   = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_potensi_produksi);
        $skor_aksesibilitas   = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_aksesibilitas);
        $skor_kondisi_lingkungan = hitungSkorBerdasarkanInterpolasiLinearGAP($gap_kondisi_lingkungan);
      
   
        
        // perhitungan skor berdasarkan prioritas (COST or BENEFIT)
        // pritoritas === nilai_terendah (COST) // pritoritas === nilai_tertinggi (BENEFIT)

        function hitungSkorBerdasarkanPrioritas(Array $arr_alternatif_kriteriaX, $prioritas)
        {
            $data = $arr_alternatif_kriteriaX;
            $dataMAX = max($data);
            $dataMIN = min($data);
            // SKOR KRITERIA BIAYA
            // skor kriteria input akan dihitung dengan fungsi Kriteria BIAYA
            // apabila pengguna memasukkan pritoritas "Prioritas Nilai Terendah" pada kriteria tersebut
            if ($prioritas === "Prioritas Nilai Terendah"){
                foreach ($data as $key => $value){
                    $data[$key] = ($value - $dataMIN) / 
                                ($dataMAX - $dataMIN)   * (1 - 5) + 5;
                }
            }
            // SKOR KRITERIA KEUNTUNGAN
            // skor kriteria input akan dihitung dengan fungsi skor Kriteria KEUNTUNGAN
            // apabila pengguna memasukkan pritoritas "Prioritas Nilai Tertinggi" pada kriteria tersebut
            elseif ($prioritas === "Prioritas Nilai Tertinggi") {
                foreach ($data as $key => $value){
                    $data[$key] = ($value - $dataMIN) / 
                                ($dataMAX - $dataMIN)   * (5 - 1) + 1;
                }
            }
            return $data;
        }

        foreach ($input->prioritas as $key => $prioritasStr) {
            if ($prioritasStr === "Prioritas Nilai Preferensi" || $prioritasStr === "Kriteria Diabaikan") { continue; }

            elseif ($prioritasStr === "Prioritas Nilai Terendah" || $prioritasStr === "Prioritas Nilai Tertinggi") { 
                switch ($key) {
                    case 0: $skor_harga = hitungSkorBerdasarkanPrioritas($products_harga, $prioritasStr); break;
                    case 1: $skor_perizinan_regulasi = hitungSkorBerdasarkanPrioritas($products_perizinan_regulasi, $prioritasStr); break;
                    case 2: $skor_ketersediaan_air = hitungSkorBerdasarkanPrioritas($products_ketersediaan_air, $prioritasStr); break;
                    case 3: $skor_lokasi = hitungSkorBerdasarkanPrioritas($products_lokasi, $prioritasStr); break;
                    case 4: $skor_potensi_produksi= hitungSkorBerdasarkanPrioritas($products_potensi_produksi, $prioritasStr); break;
                    case 5: $skor_aksesibilitas = hitungSkorBerdasarkanPrioritas($products_aksesibilitas, $prioritasStr); break;
                    case 6: $skor_kondisi_lingkungan = hitungSkorBerdasarkanPrioritas($products_kondisi_lingkungan, $prioritasStr); break;
                  
                }
            }
        }

        // kode dibawah mulai pengambilan bobot antar kriteria (dari Pembobotan Langsung atau AHP)
        $this_user_id = Auth::id();
        $this_user = User::where('id', $this_user_id)->first();
        

        $bobot_ahp = null;

        // jika menggunakan pembobotan AHP
        if ($input->jenis_pembobotan) {
            
            $is_bobot_dipilih = AHP::where('is_konsisten', '=', 1)->where('id_perhitungan', $this_user->id_perhitungan_aktif)->first();
            if (empty($is_bobot_dipilih)) {
                return redirect()->back()->with('error', 'Pastikan Anda telah mengaktifkan satu opsi pembobotan AHP yang KONSISTEN')
                ;}
            
            $bobot_ahp = Bobot::where('id_perhitungan', '=', $is_bobot_dipilih->id_perhitungan)->first();
            
        
        // jika menggunakan pembobotan Langsung
        } else{

            $bobot_ahp = BobotLangsung::where('id_user', '=', $this_user_id)->first();

            // normalisasi
            $sum = $bobot_ahp->c1 + $bobot_ahp->c2 + $bobot_ahp->c3 + $bobot_ahp->c4 + $bobot_ahp->c5 + $bobot_ahp->c6
                    + $bobot_ahp->c7;
            $bobot_ahp->c1 = $bobot_ahp->c1 / $sum;
            $bobot_ahp->c2 = $bobot_ahp->c2 / $sum;
            $bobot_ahp->c3 = $bobot_ahp->c3 / $sum;
            $bobot_ahp->c4 = $bobot_ahp->c4 / $sum;
            $bobot_ahp->c5 = $bobot_ahp->c5 / $sum;
            $bobot_ahp->c6 = $bobot_ahp->c6 / $sum;
            $bobot_ahp->c7 = $bobot_ahp->c7 / $sum;
         
        }

        $arr_hasil_rekomendasi = array();
        
        foreach ($products as $key => $product) 
        {
            // kalikan skor kriteria hasil skoring metode PM dan Interpolasi Linear dengan bobot_ahp (AHP) 
            $temp_harga            = $skor_harga[$key] * $bobot_ahp->c1;
            $temp_perizinan_regulasi         = $skor_perizinan_regulasi[$key] * $bobot_ahp->c2;
            $temp_ketersediaan_air    = $skor_ketersediaan_air[$key] * $bobot_ahp->c3;
            $temp_lokasi    = $skor_lokasi[$key] * $bobot_ahp->c4;
            $temp_potensi_produksi   = $skor_potensi_produksi[$key] * $bobot_ahp->c5;
            $temp_aksesibilitas   = $skor_aksesibilitas[$key] * $bobot_ahp->c6;
            $temp_kondisi_lingkungan = $skor_kondisi_lingkungan[$key] * $bobot_ahp->c7;
          
            // set nol (0) jika kriteria diabaikan
            foreach ($input->prioritas as $index => $prioritasStr) {
                if ($prioritasStr === "Kriteria Diabaikan") {
                    switch ($index) {
                        case 0: $temp_harga = 0; break;
                        case 1: $temp_perizinan_regulasi = 0; break;
                        case 2: $temp_ketersediaan_air = 0; break;
                        case 3: $temp_lokasi = 0; break;
                        case 4: $temp_potensi_produksi= 0; break;
                        case 5: $temp_aksesibilitas = 0; break;
                        case 6: $temp_kondisi_lingkungan = 0; break;
                       
                    }
                }
            }
            // kemudian jumlahkan semua hasil perkalian
            $sum = $temp_harga + $temp_perizinan_regulasi + $temp_ketersediaan_air + $temp_lokasi + $temp_potensi_produksi
                     + $temp_aksesibilitas + $temp_kondisi_lingkungan ;
            
            $temp_hasil_rekomendasi = ['n_bobot' => $sum,'product' => $products[$key] ];
            array_push($arr_hasil_rekomendasi, $temp_hasil_rekomendasi);
        }

        // dd($arr_hasil_rekomendasi);

        // sort by n_bobot (nilai skor rekomendasi alternatif produk)
        $col = array_column( $arr_hasil_rekomendasi, 'n_bobot' );
        array_multisort( $col, SORT_DESC, $arr_hasil_rekomendasi );

        // dd($this_user_id);
        // dd($arr_for_sort_product);
        // delete dulu apabila pernah melakukan rekomendasi
        HasilRekomendasi::where('user_id', $this_user_id)->delete();

        // mulai memasukkan data ke Tabel hasil_rekomendasi
        $data = array();
        foreach ($arr_hasil_rekomendasi as $key => $arr) {
            $temp = array(
                'user_id'    => $this_user_id,
                'product_id' => $arr['product']->id,
                'n_bobot'    => $arr['n_bobot'],
            );
            array_push($data, $temp);
        }
        HasilRekomendasi::insert($data);
        // dd($data);

        // ambil column product dari array yang sudah di sort
        $hasil_rekomendasi = array_column( $arr_hasil_rekomendasi, 'product');
        $products = $hasil_rekomendasi;
        $n_bobot = array_column( $arr_hasil_rekomendasi, 'n_bobot');
        
        // add skor rekomendasi ke dalam objek produk
        foreach ($products as $key => $product) {
            $product->n_bobot = $n_bobot[$key];
        }
        
        // siapin data preferensi yang digunakan dalam perhitungan rekomendasi untuk dimasukkan ke dalam database
        if (true) {
            $pref_harga = $input->prioritas[0] === 'Prioritas Nilai Preferensi' ? $input->harga : $input->prioritas[0];
            $pref_perizinan_regulasi = $input->prioritas[1] === 'Prioritas Nilai Preferensi' ? $input->perizinan_regulasi : $input->prioritas[1];
            $pref_ketersediaan_air = $input->prioritas[2] === 'Prioritas Nilai Preferensi' ? $input->ketersediaan_air : $input->prioritas[2];
            $pref_lokasi = $input->prioritas[3] === 'Prioritas Nilai Preferensi' ? $input->lokasi : $input->prioritas[3];
            $pref_potensi_produksi= $input->prioritas[4] === 'Prioritas Nilai Preferensi' ? $input->potensi_produksi: $input->prioritas[4];
            $pref_aksesibilitas = $input->prioritas[5] === 'Prioritas Nilai Preferensi' ? $input->aksesibilitas : $input->prioritas[5];
            $pref_kondisi_lingkungan = $input->prioritas[6] === 'Prioritas Nilai Preferensi' ? $input->kondisi_lingkungan : $input->prioritas[6];
         
        }
        

        AhpPmDigunakanHasilRekomendasi::where('user_id', $this_user_id)->delete();
        $bobotKriteriaDanPreferensiKriteria = AhpPmDigunakanHasilRekomendasi::create([
            'user_id' => $this_user_id,

            'bobot_harga' => $bobot_ahp->c1 ,
            'bobot_perizinan_regulasi' => $bobot_ahp->c2 ,
            'bobot_ketersediaan_air' => $bobot_ahp->c3 ,
            'bobot_lokasi' => $bobot_ahp->c4 ,
            'bobot_potensi_produksi' => $bobot_ahp->c5 ,
            'bobot_aksesibilitas' => $bobot_ahp->c6 ,
            'bobot_kondisi_lingkungan' => $bobot_ahp->c7 ,
         
    
            'pref_harga' => $pref_harga,
            'pref_perizinan_regulasi' => $pref_perizinan_regulasi,
            'pref_ketersediaan_air' => $pref_ketersediaan_air,
            'pref_lokasi' => $pref_lokasi,
            'pref_potensi_produksi' => $pref_potensi_produksi,
            'pref_aksesibilitas' => $pref_aksesibilitas,
            'pref_kondisi_lingkungan' => $pref_kondisi_lingkungan,
           
        ]);

 
        $input->session()
            ->flash('success','Rekomendasi berhasil. Silakan pilih Tanah yang tersedia'); 

        return view('rekomendasi.list_rekomendasi',compact('products', 'n_bobot', 'bobotKriteriaDanPreferensiKriteria'))
            ->with('success', 'Rekomendasi berhasil. Berikut hasil rekomendasi Tanah');

    }
    }
  
    public function hasil_index(Product $product)
    {

        $this_user_id = Auth::id();


        $bobotKriteriaDanPreferensiKriteria = AhpPmDigunakanHasilRekomendasi::where('user_id', '=', $this_user_id)->first();
        if (empty($bobotKriteriaDanPreferensiKriteria)) {
            $bobotKriteriaDanPreferensiKriteria = new AhpPmDigunakanHasilRekomendasi();
        }

        $products = HasilRekomendasi::where('hasil_rekomendasi.user_id', $this_user_id)
        ->leftJoin('products', 'products.id', 'hasil_rekomendasi.product_id')
        ->leftJoin('favorites', 'favorites.fav_product_id', 'hasil_rekomendasi.product_id')
        ->orderBy('hasil_rekomendasi.n_bobot', 'desc')
        ->get();

        return view('rekomendasi.list_rekomendasi', compact('products', 'bobotKriteriaDanPreferensiKriteria'));
    }
    public function product_detail(Product $product, $id)
    {
        $this_user_id = Auth::id();

        // send data to view
        $product = Product::where('id', $id)->first();
        $is_favorite = Favorite::where([['user_id', $this_user_id], ['fav_product_id', $id]])->first();

        return view('rekomendasi.product_detail',compact('product', 'is_favorite'));
    }
}
