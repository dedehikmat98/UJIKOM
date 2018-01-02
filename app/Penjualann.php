<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualann extends Model
{
    //
    protected $fillable = ['id_pelanggan', 'id_buku', 'tgl_jual'];
    protected $visible = ['id_pelanggan', 'id_buku', 'tgl_jual'];
    public $timestamps = true;
    public function pelanggan()
    {
    	return $this->belongsTo('App\Pelanggan', 'id_pelanggan');
    }

     public function buku()
    {
    	return $this->belongsTo('App\Buku', 'id_buku');
    }
}
