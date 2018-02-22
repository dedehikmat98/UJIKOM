<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;
use App\Supplier;

class Pembelian extends Model
{
    //
    protected $fillable = ['id_supplier','id_buku','judul','tanggal','harga','jumlah','total_harga'];
    public $timestamps = true ;

    public function supplier()
    {
    	return $this->belongsTo('App\Supplier','id_supplier');
    }

    public function buku()
    {
    	return $this->belongsTo('App\Buku','id_buku');
    }
}
