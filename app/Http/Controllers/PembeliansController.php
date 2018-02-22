<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Supplier;
use App\Buku;
use App\Pembelian;

class PembeliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembelian = DB::table('pembelians')
                    ->join('suppliers','pembelians.id_supplier','=','suppliers.id')
                    ->join('bukus','pembelians.id_buku','=','bukus.id')
                    ->select('pembelians.*','suppliers.nama','bukus.judul')->get();
        return view('pembelian.index',compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = Supplier::all();
        $buku = Buku::all();
        return view('pembelian.create',compact('supplier','buku'));
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
        // dd($request->b);
        $buku = Buku::findOrFail($request->b);
        $pembelian = new Pembelian();
        $pembelian->id_supplier = $request->a;
        $pembelian->id_buku = $request->b;
        $pembelian->tanggal = $request->c;
        $pembelian->harga = $request->d;
        $pembelian->jumlah = $request->e;
        $buku->stok = $buku->stok+$request->e;
        $buku->save();
        $pembelian->total_harga = $request->d*$request->e;
        $pembelian->save();
        return redirect('/admin/pembelian');
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
        $pembelian = Pembelian::findOrFail($id);
        $buku = Buku::all();
        $supplier = Supplier::all();
        return view('pembelian.edit',compact('pembelian','buku','supplier'));
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
        $pembelian =Pembelian::findOrFail($id);
        $pembelian->id_supplier = $request->a;
        $pembelian->id_buku = $request->b;
        $pembelian->tanggal = $request->c;
        $pembelian->harga = $request->d;
        $pembelian->jumlah = $request->e;
        $buku->stok = $buku->stok+$request->e;
        $buku->save();
        $pembelian->total_harga = $request->d*$request->e;
        $pembelian->save();
        return redirect('/admin/pembelian');
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
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();
        return redirect('/admin/pembelian');
    }
}
