@extends('admin.app')
@section('title', 'Data Armada')
@section('content')

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 20px;">Daftar Mobil Vorent</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <iconify-icon icon="mdi:plus-circle"></iconify-icon> Tambah Mobil Baru
        </a>
    </div>

    @if(session('success'))
        <div style="background: #d1fae5; color: #059669; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="background-color: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                    <th style="padding: 15px;">Gambar</th>
                    <th style="padding: 15px;">Nama Mobil</th>
                    <th style="padding: 15px;">Status</th>
                    <th style="padding: 15px;">Harga (Sopir)</th>
                    <th style="padding: 15px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr style="border-bottom: 1px solid #e2e8f0;">
                    <td style="padding: 15px;">
                        <img src="{{ asset('storage/' . $product->gambar) }}" width="80" style="border-radius: 8px;">
                    </td>
                    <td style="padding: 15px; font-weight: bold;">{{ $product->nama_produk }}</td>
                    <td style="padding: 15px;">
                        <span style="padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; background: {{ $product->status == 'tersedia' ? '#d1fae5' : '#fee2e2' }}; color: {{ $product->status == 'tersedia' ? '#059669' : '#dc2626' }};">
                            {{ ucfirst($product->status) }}
                        </span>
                    </td>
                    <td style="padding: 15px;">Rp{{ number_format($product->harga_sopir, 0, ',', '.') }}</td>
                    <td style="padding: 15px;">
                        <a href="{{ route('products.edit', $product->id) }}" style="background: #fef08a; color: #854d0e; padding: 8px 15px; border-radius: 8px; text-decoration: none; font-weight: bold; font-size: 14px; margin-right: 5px;">Edit</a>
                        
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus mobil ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #fee2e2; color: #dc2626; border: none; padding: 8px 15px; border-radius: 8px; font-weight: bold; font-size: 14px; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection