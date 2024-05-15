<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BobotLangsung extends Model
{
    use HasFactory;
    protected $table = 'bobot_langsung';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
        'c7',
      
    ];
}
