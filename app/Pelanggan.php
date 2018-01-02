<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table = 'pelanggans';
    protected $fillable = ['nama', 'email', 'alamat', 'no_telp'];
    protected $visible = ['nama', 'email', 'alamat', 'no_telp'];
    public $timestamps = true;

    public function penjualans()
    {
    	return $this->hasMany('App\Penjualan');
    }
}
