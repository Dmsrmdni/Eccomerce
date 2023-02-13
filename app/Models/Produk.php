<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Ukuran;
use App\Models\Kategori;
use App\Models\Wishlist;
use App\Models\Keranjang;
use App\Models\SubKategori;
use App\Models\ReviewProduk;
use App\Models\UkuranProduk;
use App\Models\RiwayatProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function subKategori()
    {
        return $this->belongsTo(SubKategori::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function reviewProduk()
    {
        return $this->hasMany(ReviewProduk::class);
    }

    public function riwayatProduk()
    {
        return $this->hasMany(RiwayatProduk::class);
    }

    public function ukuranProduk()
    {
        return $this->hasMany(UkuranProduk::class);
    }

    public function ukuran()
    {
        return $this->belongsToMany(Ukuran::class,'ukuran_produks');
    }
}
