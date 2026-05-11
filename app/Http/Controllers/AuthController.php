<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. Menampilkan halaman form login
    public function index() {
        return view('auth.login');
    }

    // 2. Memproses pengecekan email dan password
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Jika email dan password cocok dengan database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Arahkan ke dashboard admin
            return redirect()->intended('admin/dashboard'); 
        }

        // Jika salah, kembalikan ke halaman login dengan pesan error
        return back()->with('error', 'Email atau Password salah.');
    }

    // 3. Memproses aksi keluar (Logout)
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Setelah logout, lempar kembali ke halaman login
        return redirect('/login');
    }
}