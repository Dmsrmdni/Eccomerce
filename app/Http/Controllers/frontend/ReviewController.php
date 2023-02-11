<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ReviewProduk;

class ReviewController extends Controller
{
    public function review($id)
    {
        $review_produks = ReviewProduk::where('produk_id', $id)->latest()->paginate(5);
        return view('user.review', compact('review_produks'));
    }
}
