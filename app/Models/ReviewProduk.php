<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewProduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailTransaksi()
    {
        return $this->belongsTo(DetailTransaksi::class, 'detailTransaksi_id');
    }
}
