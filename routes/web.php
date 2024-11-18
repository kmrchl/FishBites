<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/ikanlaut', function () {
    return view('ikanlaut');
});

Route::get('/ikanlaut-detail', function () {
    return view('ikanlaut-detail');
});

Route::get('/ikantawar', function () {
    return view('ikantawar');
});

Route::get('/ikantawar-detail', function () {
    return view('ikantawar-detail');
});

Route::get('/bibitpakan', function () {
    return view('bibitpakan');
});

Route::get('/bibitpakan-detail', function () {
    return view('bibitpakan-detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog-detail');
});

Route::get('/company', [CompanyController::class, 'index']);
