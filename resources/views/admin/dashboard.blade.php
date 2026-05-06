<!-- Mengambil template dari file app.blade.php -->
@extends('admin.app')

<!-- Mengisi bagian @yield('title') di app.blade.php -->
@section('title', 'Dashboard Overview')

<!-- Mengisi bagian @yield('content') di app.blade.php -->
@section('content')

<style>
    .welcome-card {
        background: linear-gradient(135deg, #1e56cd 0%, #0d368b 100%);
        color: white;
        padding: 40px;
        border-radius: 20px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(30, 86, 205, 0.2);
    }

    .welcome-card h2 {
        font-size: 32px;
        margin-bottom: 10px;
        position: relative;
        z-index: 2;
    }

    .welcome-card p {
        font-size: 16px;
        opacity: 0.9;
        position: relative;
        z-index: 2;
    }

    /* Elemen Dekorasi di Background Welcome Card */
    .shape-1 {
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
        top: -50px;
        right: -20px;
    }
    
    .shape-2 {
        position: absolute;
        width: 150px;
        height: 150px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
        bottom: -40px;
        right: 120px;
    }

    /* Statistik Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .stat-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        display: flex;
        align-items: center;
        gap: 20px;
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    }

    .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
    }

    .icon-blue { background: #e8f0ff; color: #1e56cd; }
    .icon-green { background: #d1fae5; color: #059669; }
    .icon-orange { background: #fef3c7; color: #d97706; }

    .stat-info h3 {
        font-size: 15px;
        color: #6b7280;
        margin-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-info h2 {
        font-size: 32px;
        color: #111;
    }
</style>

<!-- Kartu Selamat Datang -->
<div class="welcome-card">
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <h2>Selamat Datang, Admin!</h2>
    <p>Ini adalah halaman utama dashboard Anda. Pantau dan kelola data armada mobil Vorent dari sini.</p>
</div>

<!-- Kartu Ringkasan (Data Dummy Sementara) -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon icon-blue">
            <iconify-icon icon="mdi:car-multiple"></iconify-icon>
        </div>
        <div class="stat-info">
            <h3>Total Armada</h3>
            <h2>12</h2> <!-- Nanti angkanya bisa dibuat dinamis mengambil dari database -->
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon icon-green">
            <iconify-icon icon="mdi:check-circle"></iconify-icon>
        </div>
        <div class="stat-info">
            <h3>Unit Tersedia</h3>
            <h2>8</h2>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon icon-orange">
            <iconify-icon icon="mdi:steering"></iconify-icon>
        </div>
        <div class="stat-info">
            <h3>Sedang Disewa</h3>
            <h2>4</h2>
        </div>
    </div>
</div>

@endsection