<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Import Controller untuk pengunjung (Frontend)
use App\Http\Controllers\ProductController as FrontendProductController;

// Import Controller untuk Admin (Backend)
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AuthController;


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
| ROUTE LOGIN & LOGOUT
|--------------------------------------------------------------------------
*/
// Halaman Login (Hanya bisa diakses kalau belum login / 'guest')
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Proses mencocokkan email & password
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Proses keluar
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ROUTE BACKEND (ADMIN)
|--------------------------------------------------------------------------
*/

    // Bungkus dengan middleware 'auth' agar wajib login
    Route::middleware('auth')->prefix('admin')->group(function () {

    // Route untuk menampilkan Dashboard Admin (Dengan Data Real-time)
    Route::get('/dashboard', function () {
        // Menghitung jumlah mobil dari database
        $totalArmada = \App\Models\Product::count(); 
        $armadaTersedia = \App\Models\Product::where('status', 'tersedia')->count(); 
        $armadaDisewa = \App\Models\Product::where('status', 'tidak tersedia')->count(); 

        // Kirim datanya ke halaman dashboard
        return view('admin.dashboard', compact('totalArmada', 'armadaTersedia', 'armadaDisewa'));
    })->name('dashboard');

    // Route Resource otomatis untuk CRUD Data Armada
    Route::resource('products', AdminProductController::class);

});