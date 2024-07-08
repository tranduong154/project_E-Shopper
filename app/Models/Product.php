<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table = 'product';

    protected $fillable = [
          'id_user' ,
            'name',
            'price',
            'id_category' ,
            'id_brand' ,
            'sale' ,
            'salee' ,
            'company', 
            'detail', 
            'avatar' ,
   ];
}
