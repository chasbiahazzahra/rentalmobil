<?php

use Illuminate\Support\Facades\Route;

// Import Controller untuk pengunjung (Frontend)
use App\Http\Controllers\ProductController as FrontendProductController;

// Import Controller untuk Admin (Backend)
use App\Http\Controllers\Admin\ProductController as AdminProductController;


/*
|--------------------------------------------------------------------------
| ROUTE FRONTEND (PENGUNJUNG)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/sewa-mobil', [FrontendProductController::class, 'index']);


/*
|--------------------------------------------------------------------------
| ROUTE BACKEND (ADMIN)
|--------------------------------------------------------------------------
*/

// Prefix 'admin' agar URL otomatis diawali dengan /admin/...
Route::prefix('admin')->group(function () {

    // Route untuk menampilkan Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route Resource otomatis untuk CRUD Data Armada
    Route::resource('products', AdminProductController::class);

});