<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\ReviewProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk(Request $request)
    {
        $kategoris = Kategori::all();
        $produks = Produk::latest()->paginate(1);
        if ($request->kategori) {
            $produks = Produk::where('kategori_id', $request->kategori)->latest()->paginate(9);
        }

        if ($request->subKategori) {
            $produks = Produk::where('sub_kategori_id', $request->subKategori)->latest()->paginate(1);
        }

        if ($request->min || $request->max) {
            $produks = Produk::whereBetween('harga', [$request->min, $request->max])->paginate(9);
        }

        $keyword = $request->keyword;
        if ($keyword) {
            $produks = Produk::where('nama_produk', 'LIKE', '%' . $keyword . '%')->paginate(9);
        }

        if ($request->diskon) {
            $produks = Produk::where('diskon', '>', 0)->paginate(9);
        }
        return view('user.produk', compact('produks', 'kategoris', 'keyword'));
    }

    public function detailProduk($id)
    {
        $produks = Produk::findOrFail($id);
        $images = Image::where('produk_id', $produks->id)->get();
        $produk_lainnya = Produk::where('sub_kategori_id', $produks->sub_kategori_id)->paginate(4);
        $review_produks = ReviewProduk::where('produk_id', $produks->id)->paginate(3);

        return view('user.detailProduk', compact('produks', 'produk_lainnya', 'images', 'review_produks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
