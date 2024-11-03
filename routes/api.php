<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FaqController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProdusenController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

route::get('/', [AdminController::class, 'index']); //Home


// PRODUSEN
Route::post('/addprodusen', [ProdusenController::class, 'store']); //Tambah Produsen
Route::delete('/hapus/{id_produsen}', [ProdusenController::class, 'destroy']); //Hapus Produsen
Route::put('/produsen/{id_produsen}', [ProdusenController::class, 'update'])->name('produsen.update');


// PRODUK
Route::post('/produk/add', [ProdukController::class, 'store'])->name('produk.store'); //Menambahkan data ke database
Route::delete('/hapusproduk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.hapus'); //Hapus Produk
Route::put('/produk/{id_produsen}', [ProdukController::class, 'update'])->name('produk.update'); //Menyimpan pengubahan data


// ARTIKEL
Route::post('/artikel/add', [ArtikelController::class, 'store'])->name('artikel.store'); //Tambah Artikel
Route::delete('/hapusartikel/{id_artikel}', [ArtikelController::class, 'destroy']); //Hapus Artikel
Route::put('/artikel/{id_artikel}', [ArtikelController::class, 'update'])->name('artikel.update');


// FAQ
Route::post('/faq/add', [FaqController::class, 'store'])->name('faq.store'); //Tambah FaQ
Route::delete('/hapusfaq/{id_faq}', [FaqController::class, 'destroy']); //Hapus FaQ
Route::put('/faq/{id_faq}', [FaqController::class, 'update'])->name('faq.update');


// CUSTOMER
Route::post('/cust/add', [CustomerController::class, 'store'])->name('cust.store'); //Tambah Customer
Route::delete('/hapuscust/{id_customer}', [CustomerController::class, 'destroy']); //Hapus Customer
Route::put('/cust/{id_customer}', [CustomerController::class, 'update'])->name('cust.update');


// ADMIN
Route::post('/admin/add', [AdminController::class, 'store'])->name('admin.store');
