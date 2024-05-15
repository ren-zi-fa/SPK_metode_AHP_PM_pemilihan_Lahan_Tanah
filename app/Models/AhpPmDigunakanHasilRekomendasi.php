<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhpPmDigunakanHasilRekomendasi extends Model
{
    use HasFactory;
    protected $table = 'nilai_ahp_pm_digunakan_hasil_rekomendasi';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',

        'bobot_harga',
        'bobot_perizinan_regulasi',
        'bobot_ketersediaan_air',
        'bobot_lokasi',
        'bobot_potensi_produksi',
        'bobot_aksesibilitas',
        'bobot_kondisi_lingkungan',
     

        'pref_harga',
        'pref_perizinan_regulasi',
        'pref_ketersediaan_air',
        'pref_lokasi',
        'pref_potensi_produksi',
        'pref_aksesibilitas',
        'pref_kondisi_lingkungan',
      
    ];
}
