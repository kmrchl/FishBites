<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\ArtikelController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProdusenController;
use App\Http\Controllers\CompanyController;
use Tymon\JWTAuth\Claims\Custom;


Route::get('/Fishbites', function () {
    return view('index');
});
Route::get('/ikantawar', function () {
    return view('ikantawar');
});
Route::get('/index', [CompanyController::class, 'index']);
Route::get('/ikantawar', [CompanyController::class, 'ikantawar']);
Route::get('/ikantawardetail', [CompanyController::class, 'ikantawardetail']);
Route::get('/ikanlaut', [CompanyController::class, 'ikanlaut']);
Route::get('/ikanlautdetail', [CompanyController::class, 'ikanlautdetail']);
Route::get('/bibitpakan', [CompanyController::class, 'bibitpakan']);
Route::get('/bibitpakandetail', [CompanyController::class, 'bibitpakandetail']);
Route::get('/blog', [CompanyController::class, 'blog']);
Route::get('/blog-detail', [CompanyController::class, 'blogDetail']);  // Pastikan sesuai dengan nama method





Route::get('/', function () {
    return view('sign.index');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
route::get('/admin', [AdminController::class, 'index'])->name('dashboard.index'); //Home
route::get('/produsen', [ProdusenController::class, 'show'])->name('produsen.index'); //Home
route::get('/artikel', [ArtikelController::class, 'show'])->name('artikel.index'); //Home
route::get('/faq', [FaqController::class, 'show'])->name('faq.index'); //Home
route::get('/customer', [CustomerController::class, 'show'])->name('customer.index'); //Home
route::get('/produk', [ProdukController::class, 'show'])->name('produk.index'); //Home

// CRUD PRODUSEN
Route::get('/tambahprodusen', [ProdusenController::class, 'add'])->name('produsen.add'); //Menyalurkan ke halaman Tambah
Route::get('/produsen/{id_produsen}/edit', [ProdusenController::class, 'edit'])->name('produsen.edit'); //Mengalihkan ke halaman Edit


// // CRUD PRODUK
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.add'); //Mengalihkan ke halaman tambah data
Route::get('/produk/edit/{id_produk}', [ProdukController::class, 'edit'])->name('produk.edit'); //Mengalihkan ke halaman Edit Produk


// // CRUD ARTIKEL
Route::get('/artikel/create', [ArtikelController::class, 'add'])->name('artikel.create'); //Menyalurkan ke halaman Tambah
Route::get('/artikel/edit/{id_artikel}', [ArtikelController::class, 'edit'])->name('artikel.edit'); //Mengalihkan ke halaman edit


// CRUD FaQ
Route::get('/tambahfaq', [FaqController::class, 'add'])->name('faq.add'); //Mengalihkan ke halaman Tambah
Route::get('/faq/edit/{id_faq}', [FaqController::class, 'edit'])->name('faq.edit'); //Mengalihkan ke halaman edit


// ADMIN
// Route::get('/admin', [AdminController::class, 'add'])->name('admin');
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
// Route::get('/test-login', function () {
//     return Auth::guard('web')->attempt(['username' => 'admin', 'password' => 'password']);
// });
Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth:web');

// CUSTOMER
Route::post('/cust/login', [CustomerController::class, 'login'])->name('admin.login');
Route::get('/tambahcust', [CustomerController::class, 'add']);
Route::get('/customer/{id_customer}/edit', [CustomerController::class, 'edit'])->name('cust.edit');

// CHAT 
Route::get('/chat/{id_customer}', [ChatController::class, 'show'])->name('chat.show');
