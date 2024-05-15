<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresetPreference extends Model
{
    use HasFactory;

    
    protected $table = 'preset_preferences';

    protected $fillable = [
        'name',
        'detail',
        'harga',
        'perizinan_regulasi',
        'ketersediaan_air',
        'lokasi',
        'potensi_produksi',
        'aksesibilitas',
        'kondisi_lingkungan',
    ];

}
