<?php

use App\Models\Ulasan;
use App\Models\Pesanan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\UlasanController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\PesananController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ProdusenController;
use App\Http\Controllers\Api\KeranjangController;

// Route::group(['middleware' => 'guest'], function (): void {
//     Route::get('/', [CompanyController::class, 'index']);
// });

// GET API
// route::get('/api/login', [AdminController::class, 'index'])->name('api.login'); //Home
route::get('/api/admin', [AdminController::class, 'index'])->name('dashboard.index'); //Home
route::get('/produsen', [ProdusenController::class, 'index'])->name('produsen.index'); //Home
route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index'); //Home
route::get('/faq', [FaqController::class, 'index'])->name('faq.index'); //Home
route::get('/customer', [CustomerController::class, 'index'])->name('customer.index'); //Home
route::get('/produk', [ProdukController::class, 'index'])->name('produk.index'); //Home
route::get('/ulasan', [UlasanController::class, 'index']); //Ulasan
route::get('/pesanan', [PesananController::class, 'index']); //Pesanan
route::get('/kategori', [KategoriController::class, 'index']); //Pesanan
route::get('/cust/profile', [CustomerController::class, 'getByEmail']);
route::get('/profile', [CustomerController::class, 'getByEmail']);




// PRODUSEN
Route::post('/produsen/add', [ProdusenController::class, 'store']); //Tambah Produsen
Route::delete('/hapus/{id_produsen}', [ProdusenController::class, 'destroy']); //Hapus Produsen
Route::put('/produsen/{id_produsen}', [ProdusenController::class, 'update'])->name('produsen.update');


// PRODUK
Route::post('/produk/add', [ProdukController::class, 'store'])->name('produk.store'); //Menambahkan data ke database
Route::delete('/hapusproduk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.hapus'); //Hapus Produk
Route::put('/produk/update/{id_produk}  ', [ProdukController::class, 'update'])->name('produk.update'); //Menyimpan pengubahan data



// KATEGORI
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/add', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/hapus/{id_kategori}', [KategoriController::class, 'destroy']);

// PESANAN
Route::post('/pesanan/add', [PesananController::class, 'store']); //Menambahkan data ke database

// ARTIKEL
Route::post('/artikel/add', [ArtikelController::class, 'store'])->name('artikel.store'); //Tambah Artikel
Route::delete('/hapusartikel/{id_artikel}', [ArtikelController::class, 'destroy']); //Hapus Artikel
Route::put('/artikel/{id_artikel}', [ArtikelController::class, 'update'])->name('artikel.update');
route::get('artikel/{id_kategori}', [ArtikelController::class, 'getArtikelDetail']); //Home


// FAQ
Route::post('/faq/add', [FaqController::class, 'store'])->name('faq.store'); //Tambah FaQ
Route::delete('/hapusfaq', [FaqController::class, 'destroy'])->name('faq.hapus'); //Hapus FaQ
Route::put('/faq/{id_faq}', [FaqController::class, 'update'])->name('faq.update');


// CUSTOMER
Route::post('/cust/login', [CustomerController::class, 'login'])->name('cust.login'); //Tambah Customer
Route::post('/cust/add', [CustomerController::class, 'store'])->name('cust.store'); //Tambah Customer
Route::delete('/hapuscust/{id_customer}', [CustomerController::class, 'destroy']); //Hapus Customer
Route::put('customer/{id}', [CustomerController::class, 'update']);
Route::get('/customer/{id_customer}', [CustomerController::class, 'getUserDetails']);


// ADMIN
Route::post('/admin/add', [AdminController::class, 'store']);
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::middleware('auth:sanctum')->post('/logout', [AdminController::class, 'logout']);
// Route::middleware('auth:sanctum')->get('/admin/login', function (Request $request) {
//     return $request->user();
// })->name('admin.login');
// Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth:sanctum');


// KERANJANG
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.home');
Route::post('/keranjang/add', [KeranjangController::class, 'store'])->name('keranjang.add');
Route::delete('/keranjang/hapus/{id_keranjang}', [KeranjangController::class, 'destroy'])->name('keranjang.hapus');


// ULASAN
Route::post('/ulasan/add', [UlasanController::class, 'store']);

// CHAT
Route::post('/chat/{id_customer}', [ChatController::class, 'store'])->name('chat.store'); // Tambah Chat baru