<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $new_produks = Produk::join('images', 'produks.id', '=', 'images.produk_id')->orderBy('produks.id', 'desc')->get();

        $images = Image::distinct()->get();
        // foreach ($new_produks as $produk) {
        //     $collectionProduk = collect($produk);
        //     $isDataExists = $collectionProduk->firstWhere('produk_id', $produk->id);
        //     if (!$isDataExists) {
        //         $result[] = $produk;
        //     }
        // };
        // $images = Image::groupBy('produk_id')->get();
        // $on_diskon = Produk::where('diskon', '>', 0)->get();

        dd($images);

        return view('user.home', compact('new_produks'));
    }
}
