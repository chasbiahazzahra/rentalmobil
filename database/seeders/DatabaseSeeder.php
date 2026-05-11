<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Wajib dipanggil untuk mengacak password

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 1 akun Admin Utama untuk Vorent
        User::create([
            'name' => 'Admin Vorent',
            'email' => 'admin@vorent.com',
            'password' => Hash::make('admin123'), // Password ini akan otomatis diacak oleh sistem
        ]);
    }
}