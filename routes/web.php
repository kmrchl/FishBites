<?php


use App\Models\Customer;
use App\Models\Produsen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProdusenController;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']); //Home
route::get('/produsen', [ProdusenController::class, 'index']); //Home
route::get('/artikel', [ArtikelController::class, 'index']); //Home
route::get('/faq', [FaqController::class, 'index']); //Home
route::get('/customer', [CustomerController::class, 'index']); //Home

// CRUD PRODUSEN
Route::get('/tambahprodusen', [ProdusenController::class, 'add']); //Menyalurkan ke halaman Tambah
Route::get('/produsen/{id_produsen}/edit', [ProdusenController::class, 'edit'])->name('produsen.edit'); //Mengalihkan ke halaman Edit


// // CRUD PRODUK
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.add'); //Mengalihkan ke halaman tambah data
Route::get('/produk/{id_produsen}/edit', [ProdukController::class, 'edit'])->name('produk.edit'); //Mengalihkan ke halaman Edit Produk


// // CRUD ARTIKEL
Route::get('/tambahartikel', [ArtikelController::class, 'add']); //Menyalurkan ke halaman Tambah
Route::get('/artikel/{id_artikel}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit'); //Mengalihkan ke halaman edit


// CRUD FaQ
Route::get('/tambahfaq', [FaqController::class, 'add']); //Mengalihkan ke halaman Tambah
Route::get('/artikel/{id_faq}/edit', [FaqController::class, 'edit'])->name('faq.edit'); //Mengalihkan ke halaman edit


// ADMIN
Route::get('/admin', [AdminController::class, 'add'])->name('admin');


// CUSTOMER
Route::get('/tambahcust', [CustomerController::class, 'add']);
Route::get('/customer/{id_customer}/edit', [CustomerController::class, 'edit'])->name('cust.edit');
