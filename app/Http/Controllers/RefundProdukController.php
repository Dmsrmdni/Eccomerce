<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\RefundProduk;
use App\Models\User;
use Illuminate\Http\Request;

class RefundProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refundProduks = RefundProduk::with('detailTransaksi', 'user')->latest()->get();
        return view('admin.refundProduk.index', compact('refundProduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detailTransaksis = DetailTransaksi::all();
        $users = User::where('role', 'costumer')->get();
        return view('admin.refundProduk.create', compact('detailTransaksis', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'detailTransaksi_id' => 'required',
            'alasan' => 'required',
        ]);

        $refundProduks = new RefundProduk();
        $refundProduks->user_id = $request->user_id;
        $refundProduks->detailTransaksi_id = $request->detailTransaksi_id;
        $refundProduks->alasan = $request->alasan;
        $refundProduks->save();
        return redirect()
            ->route('refundProduk.index')->with('success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefundProduk  $refundProduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefundProduk  $refundProduk
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
     * @param  \App\Models\RefundProduk  $refundProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefundProduk  $refundProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refundProduks = RefundProduk::findOrFail($id);
        $refundProduks->delete();
        return redirect()
            ->route('refundProduk.index')->with('success', 'Data has been deleted');
    }
}
