<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
     protected $table = 'bukus';
     protected $fillable = ['judul', 'penulis', 'stok', 'harga', 'cover'];
     protected $visible = ['judul', 'penulis', 'stok', 'harga', 'cover'];
     public $timestamps = true;

     public function detail_penjualan()
    {
    	return $this->hasMany('App\DetailPenjualan');
    }
}
