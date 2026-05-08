<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
    // 1. Tentukan nama mobil secara spesifik (pastikan ejaannya SAMA PERSIS dengan yang ada di database)
    $mobilUnggulan = [
        'Innova Reborn', 
        'Innova Reborn Cumi', 
        'Innova Cumi 2KD'
    ];

    // 2. Ambil data dari database HANYA yang namanya ada di daftar $mobilUnggulan
    $products = \App\Models\Product::whereIn('nama_produk', $mobilUnggulan)->get(); 
    
    return view('home', compact('products'));
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