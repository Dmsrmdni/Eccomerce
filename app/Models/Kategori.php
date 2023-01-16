<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\SubKategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function sub_kategori()
    {
        return $this->hasMany(SubKategori::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
