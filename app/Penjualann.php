<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;
use App\Penjualann;

class Penjualann extends Model
{
    //
    protected $fillable = ['kode_transaksi', 'id_buku', 'tanggal','harga','jumlah','total_harga'];
    protected $visible = ['kode_transaksi', 'id_buku', 'tanggal','harga','jumlah','total_harga'];
    public $timestamps = true;

     public function buku()
    {
    	return $this->belongsTo('App\Buku', 'id_buku');
    }
}
