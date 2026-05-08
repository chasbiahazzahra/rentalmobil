<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Wajib ditambahkan untuk mengelola upload gambar

class ProductController extends Controller
{
    // 1. READ: Menampilkan Tabel Daftar Armada di halaman Admin
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    // 2. CREATE: Menampilkan Form Tambah Mobil
    public function create()
    {
        return view('admin.products.create');
    }

    // 3. STORE: Proses Menyimpan Data dari Form ke Database
    public function store(Request $request)
    {
        // Memastikan inputan valid dan sinkron dengan aturan phpMyAdmin (Null: No)
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'bbm' => 'required|string',             // <-- Tambahan: Wajib
            'fitur' => 'required|string',           // <-- Tambahan: Wajib
            'area_pemakaian' => 'required|string',  // <-- Tambahan: Wajib
            'kapasitas' => 'required',
            'harga_lepas_kunci' => 'nullable|numeric',
            'harga_sopir' => 'required|numeric',
            'status' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048' // <-- Diubah jadi required
        ]);

        $data = $request->all();

        // Proses Upload Gambar
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('products', 'public');
            $data['gambar'] = $path;
        }

        // Jika harga lepas kunci dikosongkan, jadikan 0
        if (!$request->filled('harga_lepas_kunci')) {
            $data['harga_lepas_kunci'] = 0;
        }

        // Simpan data ke tabel products
        Product::create($data);

        // Kembali ke halaman tabel dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Mobil baru berhasil ditambahkan!');
    }

    // 4. EDIT: Menampilkan Form Edit dengan data lama yang sudah terisi
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Cari mobil berdasarkan ID, kalau gak ada error 404
        return view('admin.products.edit', compact('product'));
    }

    // 5. UPDATE: Proses menyimpan perubahan data ke database
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'bbm' => 'required|string',
            'fitur' => 'required|string',
            'area_pemakaian' => 'required|string',
            'kapasitas' => 'required',
            'harga_lepas_kunci' => 'nullable|numeric',
            'harga_sopir' => 'required|numeric',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $data = $request->all();

        // Jika ada upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama agar memori tidak penuh
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            // Simpan gambar baru
            $path = $request->file('gambar')->store('products', 'public');
            $data['gambar'] = $path;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Data armada berhasil diperbarui!');
    }

    // 6. DELETE: Menghapus data dari database dan menghapus fotonya dari folder
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus file fotonya dari folder storage agar memori laptop/server tidak penuh
        if ($product->gambar) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($product->gambar);
        }

        // Hapus datanya dari tabel products
        $product->delete();

        // Kembali ke halaman tabel dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Data armada berhasil dihapus!');
    }
}