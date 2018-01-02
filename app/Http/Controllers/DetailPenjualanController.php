<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPenjualan;
use App\Buku;
use App\Penjualann;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detailpenjualan = DetailPenjualan::with('buku')->get();
        return view('detailpenjualan.index', compact('detailpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buku=Buku::all();
        return view('detailpenjualan.create',compact('buku'));
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
        $bebas = $request->all();
        $buku = Buku::where('id', $bebas['id_buku'])->first();
        $detailpenjualan = new DetailPenjualan;
        $detailpenjualan->id_buku = $request->id_buku;
        $detailpenjualan->jumlah = $request->c;
        $detailpenjualan->total_harga = $request->c * $buku->harga;
        $detailpenjualan->save();
        return redirect()->route('detailpenjualan.index');
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
        $detailpenjualan = DetailPenjualan::findOrFail($id);
        $buku = Buku::all();
        return view('detailpenjualan.edit', compact('detailpenjualan', 'penjualan', 'buku'));
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
        $bebas = $request->all();
        $buku = Buku::where('id', $bebas['id_buku'])->first();
        $detailpenjualan = DetailPenjualan::findOrFail($id);
        $detailpenjualan->id_buku = $request->id_buku;
        $detailpenjualan->jumlah = $request->c;
        $detailpenjualan->total_harga = $request->c * $buku->harga;
        $detailpenjualan->save();
        return redirect()->route('detailpenjualan.index');
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
        $detailpenjualan = DetailPenjualan::findOrFail($id);
        $detailpenjualan->delete();
        return redirect()->route('detailpenjualan.index');
    }
}
