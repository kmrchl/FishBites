<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdusenController;
use App\Models\Produsen;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']); //Home

// CRUD PRODUSEN
Route::post('/addprodusen', [ProdusenController::class, 'store']); //Tambah Produsen
Route::get('/tambahprodusen', [ProdusenController::class, 'index']); //Menyalurkan ke halaman Tambah
Route::delete('/hapus/{id_produsen}', [ProdusenController::class, 'destroy']); //Hapus Produsen
Route::get('/produsen/{id_produsen}/edit', [ProdusenController::class, 'edit'])->name('produsen.edit');
Route::put('/produsen/{id_produsen}', [ProdusenController::class, 'update'])->name('produsen.update');


// CRUD PRODUK
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.add'); //Mengalihkan ke halaman tambah data
Route::post('/produk/add', [ProdukController::class, 'store'])->name('produk.store'); //Menambahkan data ke database
Route::delete('/hapusproduk/{id_produk}', [ProdukController::class, 'destroy']); //Hapus Produk
Route::get('/produk/{id_produsen}/edit', [ProdukController::class, 'edit'])->name('produk.edit'); //Mengalihkan ke halaman Edit Produk
Route::put('/produk/{id_produsen}', [ProdukController::class, 'update'])->name('produk.update'); //Menyimpan pengubahan data


// CRUD ARTIKEL
Route::get('/tambahartikel', [ArtikelController::class, 'index']); //Menyalurkan ke halaman Tambah
Route::post('/artikel/add', [ArtikelController::class, 'store'])->name('artikel.store'); //Tambah Artikel
Route::delete('/hapus/{id_artikel}', [ArtikelController::class, 'destroy']); //Hapus Artikel
Route::get('/artikel/{id_artikel}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::put('/artikel/{id_artikel}', [ArtikelController::class, 'update'])->name('artikel.update');
