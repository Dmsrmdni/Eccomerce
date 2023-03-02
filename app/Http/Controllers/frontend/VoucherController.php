<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function voucher()
    {
        $vouchers = Voucher::all();
        return view('user.voucher', compact('vouchers'));
    }

    public function klaim(Request $request)
    {
        dd($request);
    }
}
