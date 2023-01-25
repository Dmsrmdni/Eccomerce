<?php

namespace App\Models;

use App\Models\TopUp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

    public function topUp()
    {
        return $this->hasMany(TopUp::class);
    }
}
