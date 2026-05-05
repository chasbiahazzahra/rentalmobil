<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'nama_produk',
        'bbm',
        'fitur',
        'area_pemakaian',
        'kapasitas',
        'harga_lepas_kunci',
        'harga_sopir',
        'gambar',
        'status'
    ];

    const TERSEDIA = 'tersedia';
    const TIDAK_TERSEDIA = 'tidak tersedia';
}