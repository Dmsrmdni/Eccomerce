<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Voucher;
use App\Models\VoucherUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::with('keranjang', 'voucher', 'user')->latest()->get();

        return view('admin.transaksi.index', compact('transaksis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role', 'costumer')->get();
        $keranjangs = Keranjang::where('status', 'keranjang')->get();
        $voucherUsers = VoucherUser::all();
        $vouchers = Voucher::where('status', 'aktif')->where('label', 'gratis')->get();
        return view('admin.transaksi.create', compact('keranjangs', 'vouchers', 'voucherUsers', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $transaksis = new Transaksi();
        $kode_transaksis = DB::table('transaksis')->select(DB::raw('MAX(RIGHT(kode_transaksi,3)) as kode'));
        if ($kode_transaksis->count() > 0) {
            foreach ($kode_transaksis->get() as $kode_transaksi) {
                $x = ((int) $kode_transaksi->kode) + 1;
                $kode = sprintf('%03s', $x);
            }
        } else {
            $kode = '001';
        }
        $transaksis->kode_transaksi = 'GNQ-' . date('dmy') . $kode;
        $transaksis->user_id = $request->user_id;
        $transaksis->voucher_id = $request->voucher_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->save();

        foreach ($request->keranjang_id as $keranjang) {
            $detailTransaksi = new DetailTransaksi();
            $detailTransaksi->transaksi_id = $transaksis->id;
            $detailTransaksi->user_id = $transaksis->user_id;
            $detailTransaksi->keranjang_id = $keranjang;
            $detailTransaksi->save();

            $keranjangs = Keranjang::where('id', $detailTransaksi->keranjang_id)->get();
            foreach ($keranjangs as $keranjang) {
                $produks = Produk::where('id', $keranjang->produk_id)->first();
                $produks->stok -= $keranjang->jumlah;
                $produks->save();
            }
        }
        return redirect()
            ->route('transaksi.index')
            ->with('success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksis = Transaksi::findOrFail($id);
        $transaksis->delete();
        return redirect()
            ->route('transaksi.index')
            ->with('success', 'Data has been deleted');

    }
}
