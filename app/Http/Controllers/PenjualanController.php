<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Pelanggan;
use App\Penjualann;
use App\Buku;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penjualan = Penjualann::with('Pelanggan','Buku')->get();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pelanggan = Pelanggan::all();
        $buku = Buku::all();
        return view('penjualan.create', compact('pelanggan', 'buku'));
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
        $penjualan = new Penjualann;
        $penjualan->id_pelanggan = $request->a;
        $penjualan->id_buku = $request->b;
        $penjualan->tgl_jual = $request->c;
        $penjualan->save();
        return redirect()->route('penjualan.index');
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
        $pelanggan = Pelanggan::all();
        $buku = Buku::all();
        return view('penjualan.edit', compact('penjualan', 'pelanggan', 'buku'));
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
        $penjualan = Penjualann::findOrFail($id);
        $penjualan->id_pelanggan = $request->a;
        $penjualan->id_buku = $request->b;
        $penjualan->tgl_jual = $request->c;
        $penjualan->save();
        return redirect()->route('penjualan.index');
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
        return redirect()->route('penjualan.index');
    }
}
