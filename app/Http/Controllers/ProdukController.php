<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.produk', [
            'produks' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambah_produk', [
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ddd($request);
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required',
            'keterangan_produk' => 'required',
            'instagram' => 'nullable',
            'toko_online' => 'nullable',
            'whatsapp' => 'nullable',
            'id_kecamatan' => 'required',
            'legalitas' => 'required',
        ]);

        Produk::create($validateData);

        return redirect('/produk/create')->with('success', 'Produk berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.detail_produk', [
            'produks' => Produk::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit_produk', [
            'produk' => Produk::find($id),
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required',
            'keterangan_produk' => 'required',
            'instagram' => 'nullable',
            'toko_online' => 'nullable',
            'whatsapp' => 'nullable',
            'id_kecamatan' => 'required',
            'legalitas' => 'required',
        ]);

        $update = Produk::where('id', $request->id_produk)->update($validateData);

        return redirect('/produk')->with('success-edit', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::destroy($id);

        return redirect('/produk')->with('destroy', 'Produk berhasil dihapus');
    }
}
