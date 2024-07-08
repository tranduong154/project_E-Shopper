<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table = 'danhgia';

    protected $fillable = [
       'rate',
       'id_blog',
       'id_user',
   ];
}
