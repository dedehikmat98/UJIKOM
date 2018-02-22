<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualannsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualanns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_transaksi');
            $table->integer('id_buku')->unsigned();
            $table->foreign('id_buku')->references('id')->on('bukus')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualanns');
    }
}
