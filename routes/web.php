<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdusenController;
use App\Models\Produsen;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']);
Route::post('/addprodusen', [ProdusenController::class, 'store']);
Route::get('/tambahprodusen', [ProdusenController::class, 'index']);
Route::delete('/hapus/{id_produsen}', [ProdusenController::class, 'destroy']);
