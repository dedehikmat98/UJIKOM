<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use App\Pembelian;
use App\Penjualan;
use App\Penjualann; 
use DB;      

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = DB::table('bukus')
                    ->join('kategoris','bukus.id_kategori','=','kategoris.id')
                    ->select('bukus.*','kategoris.kategori')->get();
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        return view('buku.create',compact('kategori'));
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
        $buku = new Buku;
        $buku->judul = $request->a;
        $buku->id_kategori = $request->kategori;
        $buku->penulis = $request->b;
        $buku->stok = $request->c;
        $buku->harga = $request->d;
        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' .$extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $buku->cover = $filename;
        }
        $buku->save();
        return redirect()->route('buku.index');
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
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('buku.edit',compact('buku','kategori'));
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
        $buku = Buku::findOrFail($id);
        $buku->judul = $request->a;
        $buku->id_kategori = $request->kategori; 
        $buku->penulis = $request->b;
        $buku->stok = $request->c;
        $buku->harga = $request->d;
        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' .$extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $buku->cover = $filename;
        }
        $buku->save();
        return redirect()->route('buku.index');

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
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
