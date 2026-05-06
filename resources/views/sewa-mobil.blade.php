<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sewa Mobil | Vorent Malang</title>

<style>
/* ============================
   GLOBAL STYLES
   ============================ */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    color: #1f2937;
    line-height: 1.7;
    background: #fafcff;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

section {
    padding: 90px 0;
}

/* ============================
   NAVBAR
   ============================ */
nav {
    position: fixed;
    top: 0;
    width: 100%;
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,.06);
    z-index: 1000;
}

.nav-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
}

.logo img {
    height: 45px;
    object-fit: contain;
}

nav ul {
    display: flex;
    gap: 30px;
    list-style: none;
}

nav a {
    position: relative;
    text-decoration: none;
    color: #222;
    font-weight: 500;
    padding-bottom: 10px;
    transition: 0.3s;
}

nav a:hover { color: #1e56cd; }

nav a.active {
    color: #1e56cd;
    font-weight: 700;
}

nav a.active::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #1e56cd;
}

/* ============================
   SECTION TITLES
   ============================ */
.sec-title {
    text-align: center;
    margin-bottom: 50px;
}

.sec-title h2 {
    font-size: 40px;
    color: #111;
    font-weight: bold;
    margin-bottom: 15px;
}

.sec-title h2::after {
    content: '';
    display: block;
    width: 70px;
    height: 4px;
    background: #1e56cd;
    margin: 15px auto 0;
    border-radius: 2px;
}

.sec-title p {
    font-size: 18px;
    color: #666;
}

/* ============================
   HERO SECTION
   ============================ */
.hero {
    padding-top: 150px;
    padding-bottom: 90px;
    background: linear-gradient(135deg, #eef4ff 0%, #ffffff 100%);
    text-align: center;
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #dfe9ff;
    color: #1e56cd;
    border-radius: 40px;
    font-weight: bold;
    margin-bottom: 20px;
}

.hero h1 {
    font-size: 52px;
    margin-bottom: 20px;
    color: #111;
}

.hero p {
    max-width: 700px;
    margin: auto;
    font-size: 18px;
    color: #555;
}

/* ============================
   KATALOG ARMADA
   ============================ */
.filter-box {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f7faff;
    padding: 20px 30px;
    border-radius: 16px;
    margin-bottom: 50px;
    border: 1px solid #eef4ff;
}

.filter-box h3 {
    color: #1e56cd;
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.catalog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
}

.car-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,.05);
    border: 1px solid #f0f4f8;
    transition: .3s;
    display: flex;
    flex-direction: column;
}

.car-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(30,86,205,.1);
    border-color: #d6ecff;
}

.car-image {
    height: 220px;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid #f0f4f8;
}

.car-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 15px;
}

.car-image .status-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.status-badge.available { background: #dcfce7; color: #16a34a; }
.status-badge.unavailable { background: #fee2e2; color: #dc2626; }

.car-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.car-content h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #111;
}

/* DROPDOWN STYLES */
.car-dropdown {
    background: #f8fbff;
    border: 1px solid #eef4ff;
    border-radius: 12px;
    margin-bottom: 12px;
    transition: 0.3s ease;
}

.car-dropdown:hover {
    border-color: #d6ecff;
}

.car-dropdown summary {
    padding: 14px 18px;
    font-size: 15px;
    font-weight: bold;
    color: #1e56cd;
    cursor: pointer;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.car-dropdown summary::-webkit-details-marker {
    display: none;
}

.car-dropdown[open] summary {
    border-bottom: 1px dashed #d6ecff;
}

.car-dropdown .toggle-icon {
    transition: transform 0.3s ease;
    font-size: 20px;
}

.car-dropdown[open] .toggle-icon {
    transform: rotate(180deg);
}

.dropdown-body {
    padding: 15px 18px;
    font-size: 14px;
    color: #555;
}

.dropdown-body ul {
    list-style: none;
}

.dropdown-body ul li {
    display: flex;
    justify-content: space-between;
    padding: 6px 0;
    border-bottom: 1px dashed #eaeaea;
}

.dropdown-body ul li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.dropdown-body .price-highlight {
    font-size: 16px;
    font-weight: bold;
    color: #111;
}

.btn-book {
    margin-top: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    padding: 14px;
    background: #1e56cd;
    color: white;
    border-radius: 12px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
    border: none;
    cursor: pointer;
}

.btn-book:hover {
    background: #0d368b;
    transform: translateY(-2px);
}

.empty {
    text-align: center;
    padding: 80px;
    background: white;
    border-radius: 25px;
    border: 1px dashed #ccc;
}

/* ============================
   SYARAT & KETENTUAN
   ============================ */
.tc-section {
    background: #ffffff;
}

.tc-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.tc-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    border: 1px solid #f0f4f8;
    transition: all 0.3s ease;
}

.tc-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(30, 86, 205, 0.1);
    border-color: #d6ecff;
}

.tc-card h3 {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 22px;
    color: #111;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px dashed #eef4ff;
}

.tc-card h3 iconify-icon {
    color: #1e56cd; /* Aksen kuning keemasan elegan */
    background: #e8f0ff;
    padding: 8px;
    border-radius: 10px;
    font-size: 24px;
}

.tc-list {
    list-style: none;
}

.tc-list li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 16px;
    color: #555;
    font-size: 15px;
}

.tc-list li iconify-icon {
    color: #1e56cd;
    font-size: 20px;
    margin-top: 3px;
    flex-shrink: 0;
}

.tc-warning {
    margin-top: 30px;
    background: #fffbeb;
    border-left: 5px solid #f59e0b;
    padding: 25px 30px;
    border-radius: 15px;
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.tc-warning iconify-icon {
    color: #d97706;
    font-size: 28px;
    flex-shrink: 0;
}

.tc-warning p {
    color: #92400e;
    font-size: 15px;
    line-height: 1.6;
    font-weight: 500;
}

/* ============================
   LARANGAN & DENDA
   ============================ */
.rules-section {
    background: #fafcff;
    padding-top: 90px;
}

.rules-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

/* Card Larangan */
.prohibit-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    border: 1px solid #fee2e2;
}

.prohibit-card h3 {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 22px;
    color: #111;
    margin-bottom: 25px;
}

.prohibit-card h3 iconify-icon {
    color: #ef4444;
    font-size: 28px;
}

.prohibit-list {
    list-style: none;
}

.prohibit-list li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 18px;
    color: #555;
    font-size: 15px;
}

.prohibit-list li iconify-icon {
    color: #ef4444;
    font-size: 20px;
    margin-top: 3px;
    flex-shrink: 0;
}

/* Card Denda */
.fines-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    border: 1px solid #fee2e2; /* Border tipis sama dengan larangan */
}

.fines-card h3 {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 22px;
    color: #111;
    margin-bottom: 25px;
}

.fines-card h3 iconify-icon {
    color: #ef4444; /* Ikon diubah jadi merah */
    font-size: 28px;
}

/* Kotak Poin Denda Baru */
.fine-box {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 10px 0;
    margin-bottom: 15px;
}

.fine-icon {
    background: #fee2e2; /* Background ikon sedikit lebih gelap */
    color: #ef4444;
    width: 45px;
    height: 45px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    flex-shrink: 0;
}

.fine-content h4 {
    font-size: 15px;
    margin-bottom: 5px;
    color: #111;
}

.fine-content p {
    color: #555;
    font-size: 14px;
    line-height: 1.6;
}

.fine-content p strong {
    color: #111;
}

/* ============================
   FOOTER
   ============================ */
footer {
    background: #111827;
    color: white;
    margin-top: 80px;
    padding: 70px 0 30px;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr; /* Kolom kiri sedikit lebih lebar untuk deskripsi */
    gap: 40px;
    margin-bottom: 40px;
    align-items: flex-start;
}

/* LOGO FOOTER */
.footer-logo img {
    height: 60px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    display: block;
    margin-bottom: 15px;
}

.footer-logo p {
    opacity: .7;
    font-size: 15px;
    line-height: 1.6;
    max-width: 300px;
}

/* NAVIGASI FOOTER */
.footer-nav h3, .footer-contact h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #fff;
}

.footer-nav a {
    display: block; /* Membuat link tersusun ke bawah */
    color: #d1d5db;
    text-decoration: none;
    margin-bottom: 12px;
    transition: 0.3s ease;
}

.footer-nav a:hover {
    color: #1e56cd;
    padding-left: 5px; /* Efek hover simpel */
}

/* KONTAK FOOTER */
.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 15px;
    color: #d1d5db;
}

.contact-item iconify-icon {
    font-size: 22px;
    color: #1e56cd;
    margin-top: 2px;
}

/* COPYRIGHT */
.copy {
    text-align: center;
    opacity: .6;
    font-size: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.1); /* Garis pemisah tipis */
    padding-top: 25px;
}

/* ============================
   RESPONSIVE (MOBILE)
   ============================ */
@media(max-width: 950px) {
    nav ul { display: none; }
    .hero h1 { font-size: 40px; }
    
    .catalog-grid,
    .tc-grid,
    .rules-grid,
    .footer-grid {
        grid-template-columns: 1fr;
    }

    .footer-grid { text-align: center; }
    .footer-logo img, .footer-logo p { margin-left: auto; margin-right: auto; }
    .contact-item { justify-content: center; }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
    <div class="container nav-wrapper">
        <a href="/" class="logo">
            <img src="storage/images/logo.jpeg" alt="Logo">
        </a>
        <ul>
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="/sewa-mobil" class="active">Sewa Mobil</a></li>
            <li><a href="/kontak" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <span class="badge">
            <iconify-icon icon="mdi:car-multiple" style="font-size:18px;"></iconify-icon> Katalog Armada Premium
        </span>
        <h1>Pilih Mobil Sesuai Kebutuhan Perjalanan</h1>
        <p>Tersedia layanan rental lepas kunci maupun *All-In* dengan sopir profesional untuk memberikan kenyamanan maksimal di setiap perjalanan Anda.</p>
    </div>
</section>

<!-- KATALOG MOBIL -->
<section>
    <div class="container">
        
        <div class="sec-title">
            <h2>Katalog Mobil</h2>
            <p>Daftar armada pilihan yang tersedia dan siap disewa</p>
        </div>

        <div class="filter-box">
            <h3>
                <iconify-icon icon="mdi:check-decagram"></iconify-icon> Menampilkan {{ count($products) }} Armada Tersedia
            </h3>
        </div>

        @if($products->count() > 0)
        <div class="catalog-grid">
            @foreach($products as $product)
            <div class="car-card">
                
                <div class="car-image">
                    @if($product->status == 'tersedia')
                        <span class="status-badge available">Tersedia</span>
                    @else
                        <span class="status-badge unavailable">Tidak Tersedia</span>
                    @endif

                    @if($product->gambar)
                        <img src="{{ asset('storage/'.$product->gambar) }}" alt="{{ $product->nama_produk }}">
                    @else
                        <div style="font-size:24px; font-weight:bold; color:#1e56cd;">
                            {{ $product->nama_produk }}
                        </div>
                    @endif
                </div>

                <div class="car-content">
                    <h3>{{ $product->nama_produk }}</h3>

                    <!-- DROPDOWN 1: Spesifikasi -->
                    <details class="car-dropdown">
                        <summary>
                            <span><iconify-icon icon="mdi:information-outline"></iconify-icon> Spesifikasi Unit</span>
                            <iconify-icon icon="mdi:chevron-down" class="toggle-icon"></iconify-icon>
                        </summary>
                        <div class="dropdown-body">
                            <ul>
                                <li><span>Kapasitas</span> <strong>{{ $product->kapasitas }}</strong></li>
                                <li><span>Bahan Bakar</span> <strong>{{ $product->bbm }}</strong></li>
                                <li><span>Fitur Utama</span> <strong>{{ $product->fitur }}</strong></li>
                                <li><span>Area Operasional</span> <strong>{{ $product->area_pemakaian }}</strong></li>
                            </ul>
                        </div>
                    </details>

                    <!-- DROPDOWN 2: Detail Harga -->
                    <details class="car-dropdown">
                        <summary>
                            <span><iconify-icon icon="mdi:tag-outline"></iconify-icon> Detail Harga Sewa</span>
                            <iconify-icon icon="mdi:chevron-down" class="toggle-icon"></iconify-icon>
                        </summary>
                        <div class="dropdown-body">
                            <ul>
                                <li>
                                    <span>Lepas Kunci</span> 
                                    <strong class="price-highlight" style="color:#1e56cd;">Rp{{ number_format($product->harga_lepas_kunci,0,',','.') }}</strong>
                                </li>
                                <li>
                                    <span>Dengan Sopir</span> 
                                    <strong class="price-highlight">Mulai Rp{{ number_format($product->harga_sopir,0,',','.') }}</strong>
                                </li>
                            </ul>
                        </div>
                    </details>

                    <a href="https://wa.me/6281256341845?text=Halo%20Admin,%20saya%20tertarik%20menyewa%20armada%20{{ urlencode($product->nama_produk) }}" target="_blank" class="btn-book" style="margin-top: 20px;">
                        <iconify-icon icon="mdi:whatsapp" style="font-size:22px;"></iconify-icon> Booking Sekarang
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="empty">
            <h2>Belum ada data armada</h2>
            <p>Silakan tambahkan data mobil melalui dashboard admin.</p>
        </div>
        @endif

    </div>
</section>

<!-- SYARAT & KETENTUAN -->
<section class="tc-section">
    <div class="container">
        
        <div class="sec-title">
            <h2>Syarat Sewa Lepas Kunci</h2>
            <p>Ketentuan dokumen jaminan penyewaan armada berdasarkan kategori penyewa</p>
        </div>

        <div class="tc-grid">
            <!-- Card Mahasiswa -->
            <div class="tc-card">
                <h3><iconify-icon icon="mdi:school-outline"></iconify-icon> Mahasiswa</h3>
                <ul class="tc-list">
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 2 KTP asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 2 KTM asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Menyediakan 1 unit motor pribadi + STNK asli (minimal tahun 2019) sebagai jaminan.</li>
                </ul>
            </div>

            <!-- Card Domisili Malang -->
            <div class="tc-card">
                <h3><iconify-icon icon="mdi:home-city-outline"></iconify-icon> Domisili Malang</h3>
                <ul class="tc-list">
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 2 KTP asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 1 Kartu Keluarga (KK) asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Menyediakan 1 unit motor pribadi + STNK asli (minimal tahun 2019) sebagai jaminan.</li>
                </ul>
            </div>

            <!-- Card Wisatawan -->
            <div class="tc-card">
                <h3><iconify-icon icon="mdi:airplane-takeoff"></iconify-icon> Wisatawan</h3>
                <ul class="tc-list">
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 2 KTP asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Wajib menyertakan 1 SIM C asli.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Deposit jaminan sebesar Rp3.000.000.</li>
                    <li><iconify-icon icon="mdi:check-circle"></iconify-icon> Menunjukkan tiket perjalanan pulang-pergi (PP).</li>
                </ul>
            </div>
        </div>

        <!-- Warning Box -->
        <div class="tc-warning">
            <iconify-icon icon="mdi:information-outline"></iconify-icon>
            <p><strong>Catatan Penting:</strong> Segala bentuk kerusakan yang disebabkan oleh kelalaian penyewa (pada layanan lepas kunci) sepenuhnya menjadi tanggung jawab penyewa. Kami berhak membatalkan sewa secara sepihak jika data yang diberikan terbukti tidak valid atau mencurigakan.</p>
        </div>

    </div>
</section>

<!-- LARANGAN & KETENTUAN DENDA -->
<section class="rules-section">
    <div class="container">
        
        <div class="sec-title">
            <h2>Larangan dan Ketentuan Denda</h2>
            <p>Harap diperhatikan demi kenyamanan bersama dan menjaga kondisi unit tetap prima</p>
        </div>

        <div class="rules-grid">
            <!-- Card Larangan -->
            <div class="prohibit-card">
                <h3>Larangan Penggunaan</h3>
                <ul class="prohibit-list">
                    <li><iconify-icon icon="mdi:close-circle"></iconify-icon> Dilarang keras merokok/vaping di dalam kabin mobil.</li>
                    <li><iconify-icon icon="mdi:close-circle"></iconify-icon> Dilarang membawa hewan peliharaan tanpa menggunakan kandang khusus (pet carrier).</li>
                    <li><iconify-icon icon="mdi:close-circle"></iconify-icon> Dilarang membawa barang terlarang (Narkoba, Sajam, Miras) sesuai hukum yang berlaku.</li>
                    <li><iconify-icon icon="mdi:close-circle"></iconify-icon> Dilarang memindahtangankan unit sewa kepada pihak/orang lain tanpa izin.</li>
                    <li><iconify-icon icon="mdi:close-circle"></iconify-icon> Dilarang menggunakan mobil untuk kegiatan balap liar atau off-road ilegal.</li>
                </ul>
            </div>

            <!-- Card Denda -->
<div class="fines-card">
    <h3>Ketentuan Denda</h3>

    <!-- Poin 1: Interior Kotor -->
    <div class="fine-box">
        <!-- Ini adalah pembungkus ikonnya -->
        <div class="fine-icon"><iconify-icon icon="mdi:water"></iconify-icon></div>
        
        <!-- Ini adalah pembungkus teksnya agar tersusun rapi ke bawah -->
        <div class="fine-content">
            <h4>Interior Kotor atau Tumpahan</h4>
            <p>Tumpahan makanan dan minuman yang membekas pada jok atau karpet dikenakan denda cuci interior sebesar <strong>Rp 50.000</strong>.</p>
        </div>
    </div>

    <!-- Poin 2: Overtime -->
    <div class="fine-box">
        <div class="fine-icon"><iconify-icon icon="bi:alarm-fill"></iconify-icon></div>
        
        <div class="fine-content">
            <h4>Keterlambatan</h4>
            <p>Keterlambatan pengembalian unit (Lepas Kunci) dikenakan denda sebesar <strong>Rp 50.000/jam</strong>.</p>
        </div>
    </div>
</div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>

<div class="container footer-grid">

<!-- KIRI (LOGO) -->
<div class="footer-logo">
<img src="storage/images/logoputih.png" alt="Logo Vorent">
<p>Rental mobil terpercaya untuk perjalanan aman dan nyaman. Siap menemani setiap momen spesialmu.</p>
</div>

<!-- TENGAH (NAVIGASI) -->
<div class="footer-nav">
<h3>Navigasi</h3>

<a href="/">Beranda</a>
<a href="/tentang">Tentang</a>
<a href="/sewa-mobil">Sewa Mobil</a>
<a href="/kontak">Kontak</a>
</div>

<!-- KANAN (KONTAK) -->
<div class="footer-contact">
<h3>Kontak</h3>

<div class="contact-item">
<iconify-icon icon="mdi:phone"></iconify-icon>
<span>0812-5634-1845</span>
</div>

<div class="contact-item">
<iconify-icon icon="mdi:map-marker"></iconify-icon>
<span>JL. Simpang Dirgantara V B6/12, Malang</span>
</div>

</div>

</div>

<div class="copy">
Copyright &copy; 2026 Vorent Malang. All rights reserved.
</div>

</footer>

</body>
</html>