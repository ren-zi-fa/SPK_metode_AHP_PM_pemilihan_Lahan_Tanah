<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = "id";
    public $incrementing = false;
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
    public function favorites(){
        return $this->hasMany(Favorite::class, 'product_id', 'id');
      }
}
