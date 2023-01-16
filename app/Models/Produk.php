<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    // public function image()
    // {
    //     if ($this->gambar_produk && file_exists(public_path('images/gambar_produk/' . $this->gambar_produk))) {
    //         return asset('images/gambar_produk/' . $this->gambar_produk);
    //     } else {
    //         return asset('images/no_image.jpg');
    //     }
    // }

    // // mengahupus image(image) di storage(penyimpanan) public
    // public function deleteImage()
    // {
    //     if ($this->gambar_produk && file_exists(public_path('images/gambar_produk/' . $this->gambar_produk))) {
    //         return unlink(public_path('images/gambar_produk/' . $this->gambar_produk));
    //     }
    // }
}
