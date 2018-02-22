<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pembelian;
class Supplier extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_tlp'];
    public function pembelian()
    {
    	return $this->hasMany('App\Pembelian');
    }
}
