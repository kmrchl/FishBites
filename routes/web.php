<?php


use App\Models\Produsen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\ProdusenController;
use App\Http\Controllers\Api\AdminController;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']); //Home

// CRUD PRODUSEN
Route::get('/tambahprodusen', [ProdusenController::class, 'index']); //Menyalurkan ke halaman Tambah
Route::get('/produsen/{id_produsen}/edit', [ProdusenController::class, 'edit'])->name('produsen.edit'); //Mengalihkan ke halaman Edit


// // CRUD PRODUK
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.add'); //Mengalihkan ke halaman tambah data
Route::get('/produk/{id_produsen}/edit', [ProdukController::class, 'edit'])->name('produk.edit'); //Mengalihkan ke halaman Edit Produk


// // CRUD ARTIKEL
Route::get('/tambahartikel', [ArtikelController::class, 'index']); //Menyalurkan ke halaman Tambah
Route::get('/artikel/{id_artikel}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit'); //Mengalihkan ke halaman edit
