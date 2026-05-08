@extends('admin.app')
@section('title', 'Edit Armada')
@section('content')

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Nama Mobil *</label>
            <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Status *</label>
                <select name="status" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <option value="tersedia" {{ $product->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="tidak tersedia" {{ $product->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Kapasitas (Seat) *</label>
                <input type="text" name="kapasitas" value="{{ $product->kapasitas }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Fitur Mobil *</label>
                <input type="text" name="fitur" value="{{ $product->fitur }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Area Pemakaian *</label>
                <input type="text" name="area_pemakaian" value="{{ $product->area_pemakaian }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Bahan Bakar (BBM) *</label>
            <input type="text" name="bbm" value="{{ $product->bbm }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Harga Lepas Kunci (Rp)</label>
                <input type="number" name="harga_lepas_kunci" min="0" value="{{ $product->harga_lepas_kunci }}" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Harga Dengan Sopir (Rp) *</label>
                <input type="number" name="harga_sopir" min="0" value="{{ $product->harga_sopir }}" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Ganti Gambar (Kosongkan jika tidak ganti)</label>
            @if($product->gambar)
                <img src="{{ asset('storage/' . $product->gambar) }}" width="150" style="border-radius: 8px; margin-bottom: 10px; display: block;">
            @endif
            <input type="file" name="gambar" accept="image/*" style="width: 100%; padding: 10px; border: 1px dashed #ccc; border-radius: 8px;">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px;">Simpan Perubahan</button>
    </form>
</div>

@endsection