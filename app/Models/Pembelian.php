<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [ "produk", "jumlah", "harga", "total_harga"] ;


}
