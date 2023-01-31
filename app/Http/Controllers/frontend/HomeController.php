<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $new_produks = Produk::latest()->paginate(4);
        $on_diskons = Produk::latest()->where('diskon', '>', 0)->paginate(8);

        return view('user.home', compact(
            'new_produks',
            'on_diskons'
        ));
    }
}
