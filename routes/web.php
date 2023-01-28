<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RefundProdukController;
use App\Http\Controllers\ReviewProdukController;
use App\Http\Controllers\RiwayatProdukController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\VoucherUserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.layouts.admin');
    // });
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/subKategori', SubKategoriController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/image', ImageController::class);
    Route::resource('/wishlist', WishlistController::class);
    Route::resource('/keranjang', KeranjangController::class);
    Route::resource('/provinsi', ProvinsiController::class);
    Route::resource('/kota', KotaController::class);
    Route::resource('/kecamatan', KecamatanController::class);
    Route::resource('/alamat', AlamatController::class);
    Route::resource('/voucher', VoucherController::class);
    Route::resource('/voucherUser', VoucherUserController::class);
    Route::resource('/topUp', TopUpController::class);
    Route::resource('/riwayatProduk', RiwayatProdukController::class);
    Route::resource('/transaksi', TransaksiController::class);
    Route::resource('/detailTransaksi', DetailTransaksiController::class);
    Route::resource('/reviewProduk', ReviewProdukController::class);
    Route::resource('/refundProduk', RefundProdukController::class);
    Route::get('/HistoryRefundProduk', [RefundProdukController::class, 'index2']);
    Route::resource('/metodePembayaran', MetodePembayaranController::class);
    Route::get('getSub_kategori/{id}', [SubKategoriController::class, 'getSubKategori']);
    Route::get('getKota/{id}', [KotaController::class, 'getKota']);
    Route::get('getKecamatan/{id}', [KecamatanController::class, 'getKecamatan']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
