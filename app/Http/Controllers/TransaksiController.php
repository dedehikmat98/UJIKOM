<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Barang;
use App\Penjualan;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $taranksis;
    public function index()
    {
        //
        $transaksi = DB::table('penjualans')
                    ->join('barangs','penjualans.id_barang','=','barangs.id')
                    ->select('penjualans.*','barangs.merk')->get();
        return view('transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = Barang::all();
        return view('transaksi.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $barang = Barang::findOrFail($request->barang);
        $transaksis=$barang->stok;
        $transaksi = new Penjualan();
        $transaksi->kode_transaksi = $request->a;
        $transaksi->id_barang = $request->barang;
        $transaksi->tanggal = $request->c;
        $transaksi->harga = $request->d;
        $transaksi->jumlah = $request->e;
        $barang->stok = $transaksis-$request->e;
        $barang->save();
        $transaksi->total_harga = $request->d*$request->e;
        $transaksi->save();
        return redirect('/admin/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaksi = Penjualan::findOrFail($id);
        $barang = Barang::all();
        return view('transaksi.edit',compact('transaksi','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $barang = Barang::findOrFail($request->merk);
        $taranksis=$barang->stok;
        $transaksi =Penjualan::findOrFail($id);
        $transaksi->kode_transaksi = $request->a;
        $transaksi->id_barang = $request->merk;
        $transaksi->tanggal = $request->b;
        $transaksi->harga = $request->c;
        $transaksi->jumlah = $request->d;
        $barang->stok = $barang->stok-$request->e;
        $barang->save();
        $transaksi->total_harga = $request->c*$request->d;
        $transaksi->save();
        return redirect('/admin/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaksi = Penjualan::findOrFail($id);
        $transaksi->delete();
        return redirect('/admin/transaksi');
    }
}