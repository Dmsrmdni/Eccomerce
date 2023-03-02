<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\ExportController;
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
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\UkuranProdukController;
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

Route::get('/coba', function () {
    return view('user.coba');
});

Route::resource('/', App\Http\Controllers\frontend\HomeController::class);
// Route::resource('/home', HomeController::class);
// Route::get('/kategori', [App\Http\Controllers\frontend\KategoriController::class, 'index']);
// Route::get('/kategori/{id}', [App\Http\Controllers\frontend\KategoriController::class, 'kategori']);
// Route::get('/kategori/{kategori_id}/subKategori/{id}', [App\Http\Controllers\frontend\KategoriController::class, 'subKategori']);

Route::get('/produk/{slug}', [App\Http\Controllers\frontend\ProdukController::class, 'produk']);
Route::get('/produk', [App\Http\Controllers\frontend\ProdukController::class, 'produk']);
Route::get('/detailProduk/{id}', [App\Http\Controllers\frontend\ProdukController::class, 'detailProduk']);
Route::get('/ulasan/{id}', [App\Http\Controllers\frontend\ReviewController::class, 'review']);
Route::get('/voucher', [App\Http\Controllers\frontend\VoucherController::class, 'voucher']);
Route::post('/voucher/klaim', [App\Http\Controllers\frontend\VoucherController::class, 'klaim']);

Route::middleware('auth')->group(function () {
    Route::get('/profil/akun', [App\Http\Controllers\frontend\UserController::class, 'akun']);
    Route::get('/profil/alamat', [App\Http\Controllers\frontend\UserController::class, 'alamat']);
    Route::get('/profil/voucher', [App\Http\Controllers\frontend\UserController::class, 'voucher']);
    Route::get('/profil/pesanan', [App\Http\Controllers\frontend\UserController::class, 'pesanan']);
    Route::post('/histori/konfirmasi/{id}', [App\Http\Controllers\frontend\UserController::class, 'konfirmasiPesanan']);
    Route::post('/histori/refund', [App\Http\Controllers\frontend\UserController::class, 'refundProduk']);
    Route::post('/histori/review', [App\Http\Controllers\frontend\UserController::class, 'reviewProduk']);
    Route::resource('/profil', App\Http\Controllers\frontend\UserController::class);
    Route::resource('/wishlist', App\Http\Controllers\frontend\WishlistController::class);
    Route::get('/deleteAllWishlist', [App\Http\Controllers\frontend\WishlistController::class, 'destroyAll']);
    Route::resource('/keranjang', App\Http\Controllers\frontend\KeranjangController::class);
    Route::get('/deleteAllKeranjang', [App\Http\Controllers\frontend\KeranjangController::class, 'destroyAll']);
    Route::get('/keranjang/{id}/delete', [App\Http\Controllers\frontend\KeranjangController::class, 'destroy']);
    Route::resource('/checkout', App\Http\Controllers\frontend\TransaksiController::class);
    Route::resource('/topUps', App\Http\Controllers\frontend\TopUpController::class);
    Route::get('/histori', [App\Http\Controllers\frontend\HistoryController::class, 'history']);
    Route::post('/ulasan/create', [App\Http\Controllers\frontend\ReviewController::class, 'store']);
    Route::resource('/alamat', App\Http\Controllers\frontend\AlamatController::class);
    Route::resource('/voucherSaya', App\Http\Controllers\frontend\VoucherUserController::class);
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/subKategori', SubKategoriController::class);
    Route::resource('/ukuran', UkuranController::class);
    Route::resource('/ukuranProduk', UkuranProdukController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/image', ImageController::class);
    Route::resource('/supplier', SupplierController::class);
    Route::resource('/wishlistAdmin', WishlistController::class);
    Route::resource('/keranjangAdmin', KeranjangController::class);
    Route::resource('/provinsi', ProvinsiController::class);
    Route::resource('/kota', KotaController::class);
    Route::resource('/kecamatan', KecamatanController::class);
    Route::resource('/alamats', AlamatController::class);
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
    Route::post('/export', [ExportController::class, 'export']);
    Route::get('getSub_kategori/{id}', [SubKategoriController::class, 'getSubKategori']);
});
Route::get('/getKota/{id}', [KotaController::class, 'getKota']);
Route::get('/getKecamatan/{id}', [KecamatanController::class, 'getKecamatan']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
