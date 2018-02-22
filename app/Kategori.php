<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;
use App\Kategori;


class Kategori extends Model
{
    //
     protected $fillable = ['kategori'];
     public function buku ()
     {
     	return $this->hasMany('App\Buku','id_kategori');
     }
}
