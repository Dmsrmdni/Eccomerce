<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MetodePembayaran;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::where('label', 'berbayar')->get();
        $metodePembayarans = MetodePembayaran::all();
        return view('user.voucher', compact('vouchers', 'metodePembayarans'));
    }
}
