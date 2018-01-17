<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $fillable = ['kategori'];
    protected $visible = ['kategori'];
    public $timestamps = true ;

    public function barang()
    {
    	return $this->hasMany('App\barang');
    }
}
