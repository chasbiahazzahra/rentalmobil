<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorent Malang</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    line-height: 1.6;
    color: #222;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

nav {
    position: fixed;
    top: 0;
    width: 100%;
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,.08);
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
}

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

.icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: #e8f0ff;
    color: #1e56cd;
}

.icon iconify-icon {
    font-size: 28px;
}

.hero {
    padding-top: 140px;
    min-height: 100vh;
    background: linear-gradient(to right, #f5faff, #ffffff);
    display: flex;
    align-items: center;
}

.hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.hero h1 {
    font-size: 58px;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    color: #555;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    padding: 15px 30px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    margin-right: 15px;
}

.btn-primary {
    background: #1e56cd;
    color: white;
}

.btn-outline {
    border: 2px solid #1e56cd;
    color: #1e56cd;
}

.hero img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,.1);
}

.stats {
    margin-top: 40px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.stat {
    background: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,.06);
}

.stat h3 {
    font-size: 30px;
    color: #1e56cd;
}

section {
    padding: 90px 0;
}

/* ============================
   FEATURES / KENAPA MEMILIH KAMI
   ============================ */
.title {
    text-align: center;
    margin-bottom: 60px;
}

.title h2 {
    font-size: 42px;
    color: #111;
    margin-bottom: 15px;
    font-weight: 700;
}

/* Garis aksen di bawah judul */
.title h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: #1e56cd;
    margin: 15px auto 0;
    border-radius: 2px;
}

.title p {
    font-size: 18px;
    color: #666;
}

.features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,.04);
    border: 1px solid #f0f4f8;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
}

/* Efek Hover untuk Card (Melayang) */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(30, 86, 205, 0.1);
    border-color: #d6ecff;
}

.card .icon {
    width: 75px;
    height: 75px;
    margin: 0 auto 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    background: #e8f0ff;
    color: #1e56cd;
    transition: all 0.4s ease;
}

.card .icon iconify-icon {
    font-size: 36px;
    transition: all 0.4s ease;
}

/* Efek Hover untuk Ikon (Ganti Warna & Membesar) */
.card:hover .icon {
    background: #1e56cd;
    color: #ffffff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 20px rgba(30, 86, 205, 0.3);
}

.card h3 {
    font-size: 20px;
    color: #222;
    margin-bottom: 12px;
    font-weight: 700;
}

.card p {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
}

.fleet {
    background: #f7fbff;
}

.car-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.car-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,.08);
}

.car-img {
    height: 220px;
    background: #d6ecff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-weight: bold;
}

.car-content {
    padding: 25px;
}

.price {
    font-size: 28px;
    font-weight: bold;
    color: #1e56cd;
    margin: 15px 0;
}

.about {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

/* ============================
   ABOUT & LAYANAN KAMI STYLE
   ============================ */
.about-box {
    background: #ffffff; 
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 10px 40px rgba(0,0,0,.06); /* Memberikan bayangan agar box terlihat menonjol */
    border: 1px solid #f0f4f8;
}

.about-box h3 {
    font-size: 26px;
    margin-bottom: 25px;
    color: #111;
    display: flex;
    align-items: center;
    gap: 10px;
}

.about-box h3 iconify-icon {
    color: #1e56cd;
}

/* Container untuk list vertikal */
.service-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Item layanan satuan */
.service-item {
    display: flex;
    align-items: center; /* Sejajarkan icon dan teks */
    gap: 20px;
    padding: 18px;
    border-radius: 16px;
    background: #f8fbff; /* Warna background tipis */
    transition: 0.3s ease;
    border-left: 4px solid transparent;
}

/* Efek saat kursor diarahkan ke item layanan */
.service-item:hover {
    background: #ffffff;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    border-left: 4px solid #1e56cd;
    transform: translateX(8px); /* Efek geser ke kanan sedikit */
}

/* Kotak icon */
.service-icon {
    background: #1e56cd;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    flex-shrink: 0; /* Mencegah icon mengecil */
    box-shadow: 0 4px 10px rgba(30, 86, 205, 0.3);
}

.service-text h4 {
    font-size: 18px;
    margin-bottom: 4px;
    color: #222;
}

.service-text p {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
}

/* ============================
   CTA SECTION ENHANCED
   ============================ */
.cta {
    position: relative;
    background: linear-gradient(135deg, #1e56cd 0%, #0d368b 100%);
    color: white;
    text-align: center;
    padding: 80px 40px;
    border-radius: 30px;
    overflow: hidden; /* Memastikan shape dekorasi tidak keluar kotak */
    box-shadow: 0 20px 40px rgba(30, 86, 205, 0.2);
}

/* Dekorasi Background CTA */
.cta-shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.04);
    z-index: 1;
}

.shape-1 {
    width: 350px;
    height: 350px;
    top: -150px;
    left: -100px;
}

.shape-2 {
    width: 450px;
    height: 450px;
    bottom: -200px;
    right: -100px;
}

.cta-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 42px;
    margin-bottom: 15px;
    font-weight: 700;
}

.cta-content p {
    font-size: 18px;
    opacity: 0.9;
    margin-bottom: 35px;
    line-height: 1.6;
}

/* Tombol WhatsApp di CTA */
.btn-wa {
    background: white;
    color: #1e56cd;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
    font-weight: bold;
    padding: 16px 40px;
    border-radius: 50px; /* Bentuk membulat penuh */
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.btn-wa iconify-icon {
    font-size: 26px;
    color: #25D366; /* Warna hijau khas WhatsApp */
}

.btn-wa:hover {
    transform: translateY(-5px); /* Efek tombol terangkat */
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    background: #f8fbff;
}

/* Penyesuaian di layar HP */
@media(max-width: 768px) {
    .cta { padding: 60px 25px; }
    .cta-content h2 { font-size: 32px; }
    .cta-content p { font-size: 16px; }
    .btn-wa { width: 100%; justify-content: center; }
}

/* ============================
   GLOBAL FOOTER STYLES (DESKTOP & MOBILE)
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
@media(max-width: 900px) {
    .hero-grid,
    .features,
    .car-grid,
    .about {
        grid-template-columns: 1fr;
    }

    nav ul {
        display: none;
    }

    .hero h1 {
        font-size: 42px;
    }

    /* Penyesuaian Footer di Mobile */
    .footer-grid {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
    }

    .footer-logo img {
        margin: 0 auto 15px; /* Tengahkan logo di HP */
    }

    .footer-logo p {
        margin: 0 auto;
    }

    .contact-item {
        justify-content: center; /* Tengahkan icon kontak di HP */
    }
}
</style>
</head>
<body>

<nav>
<div class="container nav-wrapper">
<a href="/" class="logo">
    <img src="storage/images/logo.jpeg" alt="Logo">
</a>

<ul>
<li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
<li><a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
<li><a href="/sewa-mobil" class="{{ request()->is('sewa-mobil*') ? 'active' : '' }}">Sewa Mobil</a></li>
<li><a href="/kontak" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
</ul>
</div>
</nav>

<section class="hero">
<div class="container hero-grid">

<div>
<h1>Rental Mobil Profesional Untuk Perjalanan Nyaman</h1>

<p>
Sewa mobil lepas kunci maupun dengan sopir
untuk perjalanan pribadi, keluarga, dan wisata.
</p>

<a href="/sewa-mobil" class="btn btn-primary">
Lihat Armada
</a>

<a href="https://wa.me/6281256341845"
class="btn btn-outline">
Hubungi Admin
</a>

<div class="stats">

<div class="stat">
<h3>10</h3>
<p>Armada</p>
</div>

<div class="stat">
<h3>100+</h3>
<p>Pelanggan</p>
</div>

<div class="stat">
<h3>24/7</h3>
<p>Layanan</p>
</div>

</div>
</div>

<div>
<img src="https://www.kayanaprimawisata.co.id/storage/2026/01/Sewa-Mobil-Malang-Lebaran-Tahun-Termurah.jpg" alt="Sewa Mobil">
</div>

</div>
</section>


<section>
<div class="container">

    <div class="title">
        <h2>Kenapa Memilih Kami?</h2>
        <p>Layanan rental terpercaya dengan standar profesionalisme tinggi</p>
    </div>

    <div class="features">

        <div class="card">
            <div class="icon">
                <!-- Icon menggunakan car-shield untuk kesan aman/terawat -->
                <iconify-icon icon="mdi:car"></iconify-icon>
            </div>
            <h3>Armada Terawat</h3>
            <p>Unit selalu bersih, wangi, nyaman, dan rutin melalui pengecekan berkala.</p>
        </div>

        <div class="card">
            <div class="icon">
                <!-- Icon menggunakan cash-check untuk kesan pasti -->
                <iconify-icon icon="mdi:cash-check"></iconify-icon>
            </div>
            <h3>Harga Transparan</h3>
            <p>Sistem harga jujur di awal tanpa adanya biaya tersembunyi di akhir perjalanan.</p>
        </div>

        <div class="card">
            <div class="icon">
                <iconify-icon icon="mdi:account-tie"></iconify-icon>
            </div>
            <h3>Driver Profesional</h3>
            <p>Sopir berpengalaman, ramah, dan sangat menguasai berbagai rute perjalanan.</p>
        </div>

        <div class="card">
            <div class="icon">
                <!-- Icon menggunakan lightning-bolt untuk kesan cepat -->
                <iconify-icon icon="mdi:lightning-bolt"></iconify-icon>
            </div>
            <h3>Fast Response</h3>
            <p>Proses reservasi sangat cepat dan mudah via WhatsApp, melayani Anda 24/7.</p>
        </div>

    </div>

</div>
</section>


<section class="fleet">
<div class="container">

<div class="title">
<h2>Armada Unggulan</h2>
<p>Pilih mobil sesuai kebutuhan perjalanan.</p>
</div>

<div class="car-grid">

<div class="car-card">
<div class="car-img">Avanza</div>

<div class="car-content">
<h3>Innova Cumi 2KD</h3>
<p>4-7 Seat • Pertalite</p>

<div class="price">
Rp400.000
</div>

<a href="/sewa-mobil" class="btn btn-primary">
Detail
</a>
</div>
</div>


<div class="car-card">
<div class="car-img">Innova</div>

<div class="car-content">
<h3>Innova Reborn</h3>
<p>Family Premium Car</p>

<div class="price">
Rp650.000
</div>

<a href="/sewa-mobil" class="btn btn-primary">
Detail
</a>
</div>
</div>


<div class="car-card">
<div class="car-img">Hiace</div>

<div class="car-content">
<h3>Innova Reborn Cumi</h3>
<p>Travel Group</p>

<div class="price">
Rp1.200.000
</div>

<a href="/sewa-mobil" class="btn btn-primary">
Detail
</a>
</div>
</div>

</div>

</div>
</section>


<section>
<div class="container about">

    <!-- BAGIAN KIRI (TEKS UTAMA) -->
    <div>
        <h2 style="font-size:46px; margin-bottom:20px; line-height: 1.2;">
            Partner Perjalanan Terpercaya
        </h2>

        <p style="font-size: 18px; color: #555; margin-bottom: 30px;">
            Nikmati perjalanan tanpa repot dengan solusi sewa mobil premium kami untuk segala kebutuhan.
        </p>
        
        <a href="/tentang" class="btn btn-outline">Lebih Lanjut Tentang Kami</a>
    </div>

    <!-- BAGIAN KANAN (BOX LAYANAN) -->
    <div class="about-box">
        <h3><iconify-icon icon="mdi:steering"></iconify-icon> Layanan Kami</h3>

        <div class="service-list">
            
            <!-- Layanan 1 -->
            <div class="service-item">
                <div class="service-icon"><iconify-icon icon="mdi:key-variant"></iconify-icon></div>
                <div class="service-text">
                    <h4>Rental Lepas Kunci</h4>
                    <p>Privasi dan kebebasan maksimal untuk mengatur waktu perjalanan Anda.</p>
                </div>
            </div>

            <!-- Layanan 2 -->
            <div class="service-item">
                <div class="service-icon"><iconify-icon icon="mdi:account-tie"></iconify-icon></div>
                <div class="service-text">
                    <h4>Rental dengan Sopir</h4>
                    <p>Perjalanan lebih santai dan aman dengan driver profesional kami.</p>
                </div>
            </div>

            <!-- Layanan 3 -->
            <div class="service-item">
                <div class="service-icon"><iconify-icon icon="mdi:car-side"></iconify-icon></div>
                <div class="service-text">
                    <h4>Antar Jemput</h4>
                    <p>Layanan antar atau jemput mobil yang disewa ke alamat Anda.</p>
                </div>
            </div>

        </div>
    </div>

</div>
</section>


<section>
<div class="container">

<div class="cta">
    <!-- Elemen Dekorasi Background -->
    <div class="cta-shape shape-1"></div>
    <div class="cta-shape shape-2"></div>

    <!-- Konten CTA -->
    <div class="cta-content">
        <h2>Siap Menyewa Mobil Hari Ini?</h2>
        
        <p>
            Jangan tunda perjalanan Anda. Hubungi admin kami sekarang untuk mendapatkan penawaran terbaik dan pilih armada yang paling sesuai.
        </p>
        
        <a href="https://wa.me/6281256341845" class="btn-wa">
            <iconify-icon icon="mdi:whatsapp"></iconify-icon> Booking via WhatsApp
        </a>
    </div>
</div>

</div>
</section>


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