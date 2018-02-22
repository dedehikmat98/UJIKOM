<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;
use App\Kategori;
use App\Pembelian;
use App\Penjualan;
use App\Penjualann;




class Buku extends Model
{
    //
     protected $fillable = ['id_kategori', 'judul', 'penulis', 'stok', 'harga', 'cover'];
     protected $visible = ['id_kategori', 'judul', 'penulis', 'stok', 'harga', 'cover'];
     
     public function kategori()
    {
    	return $this->belongsTo('App\Kategori','id_kategori');
    }

     public function penjualan()
    {
    	return $this->hasMany('App\Penjualann');
    }

     public function pembelian()
    {
    	return $this->hasMany('App\Pembelian');
    }


}
