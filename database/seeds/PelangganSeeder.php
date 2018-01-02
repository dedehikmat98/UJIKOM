<?php

use Illuminate\Database\Seeder;
use App\Pelanggan;
use App\Buku;
use App\Penjualann;
use App\DetailPenjualan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample Pelanggan
        $pelanggan1 = Pelanggan::create(['nama'=>'Iswanto', 'alamat'=>'Ranca Mas', 'email'=>'iswan@gmail.com', 'no_telp'=>'+6289655786383']);

        //Sample Buku
        $buku1 = Buku::create(['judul'=>'Gerbang Dialog Danur', 'penulis'=>'Risa Saraswati', 'stok'=>'10', 'harga'=>'58000']);

        //Sample Penjualan
        $penjualan1 = Penjualann::create(['tgl_jual'=>'2017-08-07', 'id_pelanggan'=>$pelanggan1->id, 'id_buku'=>$buku1->id]);

		//Sample Detail Penjualan
        $detailpenjualan = DetailPenjualan::create(['id_buku'=>$buku1->id, 'jumlah'=>'2', 'total_harga'=>'116000']);
    }
}
