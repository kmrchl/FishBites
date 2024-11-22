<?php

namespace App\Providers;

use App\Models\Admin;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Container\Attributes\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(Admin::class);
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/', function (Request $request) {
                return response()->json($request->user());
            });
        });

        // Menambahkan middleware untuk grup API (jika diperlukan)
        Route::middleware('api')->group(function () {
            // Daftar rute yang membutuhkan autentikasi
            Route::get('/secure-data', function () {
                return response()->json(['message' => 'This is secured data.']);
            });
        });
    }
}
