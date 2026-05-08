@extends('admin.app')
@section('title', 'Tambah Armada Baru')
@section('content')

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Nama Mobil *</label>
            <input type="text" name="nama_produk" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Status *</label>
                <select name="status" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Kapasitas (Seat) *</label>
                <input type="text" name="kapasitas" required placeholder="Contoh: 4-7 Seat" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Fitur Mobil *</label>
                <input type="text" name="fitur" required placeholder="Contoh: AC Dingin, Full Musik" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Area Pemakaian *</label>
                <input type="text" name="area_pemakaian" required placeholder="Contoh: Dalam & Luar Kota" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Bahan Bakar (BBM) *</label>
            <input type="text" name="bbm" required placeholder="Contoh: Pertamax / Diesel" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Harga Lepas Kunci (Rp)</label>
                <input type="number" name="harga_lepas_kunci" min="0" placeholder="Kosongkan jika tidak ada" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Harga Dengan Sopir (Rp) *</label>
                <input type="number" name="harga_sopir" min="0" required placeholder="Contoh: 650000" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Upload Gambar Mobil *</label>
            <input type="file" name="gambar" accept="image/*" required style="width: 100%; padding: 10px; border: 1px dashed #ccc; border-radius: 8px;">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px;">Simpan Armada Baru</button>
    </form>
</div>

@endsection