<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\SubKategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $produks = Produk::latest()->get();
        return view('user.kategoris', compact('kategoris', 'produks'));

    }

    public function Kategori($id)
    {
        $subKategoris = SubKategori::where('kategori_id', $id)->get();

        $produks = Produk::where('kategori_id', $id)->get();
        return view('user.kategori', compact('subKategoris', 'produks'));
    }

    public function subKategori($kategori_id, $id)
    {

        $produks = Produk::where('sub_kategori_id', $id)->get();
        return view('user.subKategori', compact('produks'));
    }

    public function detailProduk($id)
    {

        $produks = Produk::findOrFail($id);
        $images = Image::where('produk_id', $produks->id)->get();
        $produk_lainnya = Produk::where('sub_kategori_id', $produks->sub_kategori_id)->paginate(4);

        return view('user.detailProduk', compact('produks', 'produk_lainnya', 'images'));
    }
}
