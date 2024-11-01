<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdusenController;
use App\Models\Produsen;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']); //Home
Route::post('/addprodusen', [ProdusenController::class, 'store']); //Tambah Produsen
Route::get('/tambahprodusen', [ProdusenController::class, 'index']); //Menyalurkan ke halaman Tambah
Route::delete('/hapus/{id_produsen}', [ProdusenController::class, 'destroy']); //Hapus Produsen
Route::get('/produsen/{id_produsen}/edit', [ProdusenController::class, 'edit'])->name('produsen.edit');
Route::put('/produsen/{id_produsen}', [ProdusenController::class, 'update'])->name('produsen.update');
