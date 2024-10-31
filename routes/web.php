<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdusenController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [AdminController::class, 'index']);
