<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use App\Penjualan;
use App\Penjualann;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $transaksis;
    public function index()
    {
        //
        $penjualan = DB::table('penjualanns')
                    ->join('bukus','penjualanns.id_buku','=','bukus.id')
                    ->select('penjualanns.*','bukus.judul')->get();
        return view('penjualan.index',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buku = Buku::all();
        return view('penjualan.create',compact('buku'));
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
        $buku = Buku::findOrFail($request->buku);
        $transaksis=$buku->stok;
        $penjualan = new Penjualann();
        $penjualan->id_buku = $request->buku;
        $penjualan->tanggal = $request->c;
        $penjualan->harga = $request->d;
        $penjualan->jumlah = $request->e;
        $buku->stok = $transaksis-$request->e;
        $buku->save();
        $penjualan->total_harga = $request->d*$request->e;
        $penjualan->save();
        return redirect('/admin/penjualan');
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
        $penjualan = Penjualann::findOrFail($id);
        $buku = Buku::all();
        return view('penjualan.edit',compact('penjualan','buku'));
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
        $buku = Buku::findOrFail($request->judul);
        $transaksis=$buku->stok;
        $penjualan =Penjualann::findOrFail($id);
        $penjualan->id_buku = $request->judul;
        $penjualan->tanggal = $request->b;
        $penjualan->harga = $request->c;
        $penjualan->jumlah = $request->d;
        $buku->stok = $buku->stok-$request->e;
        $buku->save();
        $penjualan->total_harga = $request->c*$request->d;
        $penjualan->save();
        return redirect('/admin/penjualan');
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
        $penjualan = Penjualann::findOrFail($id);
        $penjualan->delete();
        return redirect('/admin/penjualan');
    }
}