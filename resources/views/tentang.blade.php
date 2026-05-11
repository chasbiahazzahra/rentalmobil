<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Vorent Malang</title>

<style>
/* ============================
   GLOBAL STYLES & NAVBAR
   ============================ */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    line-height: 1.6;
    color: #333;
    background-color: #fafcff;
    overflow-x: hidden; /* MENCEGAH LAYAR BOCOR KE SAMPING */
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

section { padding: 90px 0; }
img { max-width: 100%; height: auto; }

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

/* Tombol Hamburger - Sembunyi di PC */
.hamburger {
    display: none;
    background: none;
    border: none;
    font-size: 35px;
    color: #1e56cd;
    cursor: pointer;
}

nav ul {
    display: flex;
    gap: 30px;
    list-style: none;
    transition: left 0.4s ease; /* Transisi animasi untuk HP */
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
   HERO ABOUT
   ============================ */
.about-hero {
    padding-top: 150px;
    padding-bottom: 70px;
    background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
}

.about-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.badge {
    background: #e8f0ff;
    color: #1e56cd;
    padding: 8px 18px;
    border-radius: 20px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 25px;
    font-size: 14px;
    letter-spacing: 0.5px;
}

.about-hero h1 {
    font-size: 52px;
    line-height: 1.2;
    margin-bottom: 25px;
    color: #111;
    font-weight: bold;
}

.about-hero p {
    font-size: 18px;
    color: #555;
    margin-bottom: 0;
    line-height: 1.8;
}

.about-hero img {
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
}

/* ============================
   TENTANG & VISI MISI
   ============================ */
.visi-misi {
    background: white;
}

.vm-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: center;
}

.vm-text h3 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #111;
    line-height: 1.3;
}

.vm-text p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.8;
}

.vm-cards {
    display: grid;
    gap: 25px;
}

.vm-card {
    background: #f8fbff;
    padding: 35px;
    border-radius: 20px;
    border-left: 5px solid #1e56cd;
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
}

.vm-card h4 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 24px;
    color: #111;
    margin-bottom: 15px;
}

.vm-card h4 iconify-icon {
    color: #1e56cd;
    font-size: 32px;
}

.vm-card ul {
    list-style: none;
    padding-left: 0;
}

.vm-card ul li {
    position: relative;
    padding-left: 25px;
    margin-bottom: 10px;
    color: #555;
}

.vm-card ul li::before {
    content: "•";
    color: #1e56cd;
    font-size: 24px;
    position: absolute;
    left: 0;
    top: -5px;
}

/* ============================
   NILAI UTAMA (CARDS)
   ============================ */
.values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.val-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,.04);
    border: 1px solid #f0f4f8;
    transition: all 0.3s ease;
}

.val-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(30, 86, 205, 0.1);
    border-color: #d6ecff;
}

.val-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
    background: #e8f0ff;
    color: #1e56cd;
    font-size: 36px;
    transition: 0.4s;
}

.val-card:hover .val-icon {
    background: #1e56cd;
    color: white;
    transform: scale(1.1) rotate(5deg);
}

.val-card h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #111;
}

.val-card p {
    font-size: 15px;
    color: #666;
}

/* ============================
   PENCAPAIAN BANNER
   ============================ */
.stats-container {
    background: linear-gradient(135deg, #1e56cd 0%, #0d368b 100%);
    border-radius: 30px;
    padding: 60px;
    color: white;
    box-shadow: 0 20px 40px rgba(30, 86, 205, 0.2);
    position: relative;
    overflow: hidden;
}

.stats-bg-shape {
    position: absolute;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
    top: -100px;
    right: -50px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    text-align: center;
    position: relative;
    z-index: 2;
}

.stat-item h3 {
    font-size: 56px;
    font-weight: bold;
    margin-bottom: 5px;
}

.stat-item p {
    font-size: 16px;
    opacity: 0.9;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ============================
   MENGAPA MEMILIH KAMI
   ============================ */
.why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.why-img {
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

.why-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.why-item {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.why-icon {
    background: #1e56cd;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
    box-shadow: 0 4px 10px rgba(30, 86, 205, 0.3);
}

.why-text h4 {
    font-size: 20px;
    color: #111;
    margin-bottom: 8px;
}

.why-text p {
    color: #666;
    font-size: 15px;
    line-height: 1.5;
}

/* ============================
   TESTIMONI
   ============================ */
.testi-section {
    background: #f4f8ff;
}

.testi-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.testi-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,.04);
    position: relative;
}

.testi-stars {
    color: #f59e0b;
    font-size: 20px;
    margin-bottom: 15px;
    display: flex;
    gap: 2px;
}

.testi-text {
    font-size: 16px;
    color: #555;
    font-style: italic;
    margin-bottom: 25px;
    line-height: 1.6;
}

.testi-user {
    display: flex;
    align-items: center;
    gap: 15px;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.testi-avatar {
    width: 50px;
    height: 50px;
    background: #e8f0ff;
    color: #1e56cd;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 20px;
}

.testi-name h5 {
    font-size: 16px;
    color: #111;
}

.testi-name span {
    font-size: 13px;
    color: #888;
}

/* ============================
   FOOTER
   ============================ */
footer {
    background: #111827;
    color: white;
    padding: 70px 0 30px;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr;
    gap: 40px;
    margin-bottom: 40px;
    align-items: flex-start;
}

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

.footer-nav h3, 
.footer-contact h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #fff;
}

.footer-nav a {
    display: block;
    color: #d1d5db;
    text-decoration: none;
    margin-bottom: 12px;
    transition: 0.3s ease;
}

.footer-nav a:hover {
    color: #1e56cd;
    padding-left: 5px;
}

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

.copy {
    text-align: center;
    opacity: .6;
    font-size: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 25px;
}

/* ============================
   RESPONSIVE (MOBILE) - FIXED
   ============================ */
@media(max-width: 900px) {
    /* Merapikan semua elemen yang berpotensi bocor */
    .about-hero-grid, 
    .vm-grid, 
    .values-grid, 
    .stats-grid, 
    .why-grid, 
    .testi-grid, 
    .footer-grid {
        grid-template-columns: 1fr; /* Memaksa 1 kolom vertikal */
        gap: 40px;
    }

    /* Penyesuaian Ukuran Font & Jarak */
    .about-hero h1 { font-size: 40px; }
    .about-hero { padding-top: 120px; text-align: center; }
    .stats-container { padding: 40px 20px; }
    .why-img { order: -1; } /* Gambar pindah ke atas di HP */

    /* Penyesuaian Footer */
    .footer-grid { text-align: center; }
    .footer-logo img, .footer-logo p { margin-left: auto; margin-right: auto; }
    .contact-item { justify-content: center; }

    /* Memunculkan Tombol Hamburger */
    .hamburger { display: block; }

    /* Merubah Menu Desktop jadi Menu Mobile Absolute */
    nav ul {
        flex-direction: column;
        position: absolute;
        top: 85px; /* Posisikan tepat di bawah navbar */
        left: -100%; /* Sembunyikan di luar layar */
        width: 100%;
        background: #ffffff;
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        gap: 20px;
    }

    /* Class ini dipanggil JS saat tombol diklik */
    nav ul.tampil { left: 0; }
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

        <button class="hamburger" id="hamburger-btn">
            <iconify-icon icon="mdi:menu"></iconify-icon>
        </button>

        <ul id="nav-menu">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="/tentang" class="active">Tentang</a></li>
            <li><a href="/sewa-mobil" class="{{ request()->is('sewa-mobil*') ? 'active' : '' }}">Sewa Mobil</a></li>
            <li><a href="/kontak" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="about-hero">
    <div class="container about-hero-grid">
        <div>
            <span class="badge">Partner Perjalanan Terpercaya</span>
            <h1>Membantu Perjalanan Lebih Aman, Nyaman, dan Profesional</h1>
            <p>Vorent Malang hadir sebagai solusi rental mobil dengan armada berkualitas, pelayanan profesional, dan pengalaman berkendara yang tak terlupakan.</p>
        </div>
        <div>
            <!-- Gambar Hero, gunakan URL gambar mobil yang bagus dari folder storage kamu -->
            <img src="storage/images/banner-tentang-hero.png" alt="Armada DER Rental">
        </div>
    </div>
</section>

<!-- TENTANG & VISI MISI -->
<section class="visi-misi">
    <div class="container vm-grid">
        <div class="vm-text">
            <h3 style="color: #1e56cd; font-size: 18px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">Tentang Vorent Malang</h3>
            <h3>Mitra Transportasi Untuk Berbagai Kebutuhan</h3>
            <p>Kami menyediakan layanan sewa mobil yang siap memenuhi berbagai kebutuhan perjalanan untuk keperluan pribadi, keluarga, hingga wisata.</p>
            <p>Dengan komitmen pada kualitas, kami menghadirkan armada yang terawat, aman, dan nyaman digunakan. Didukung oleh pelayanan yang profesional, cepat, dan transparan, kami berupaya memberikan pengalaman perjalanan terbaik bagi setiap pelanggan.</p>
        </div>
        
        <div class="vm-cards">
            <div class="vm-card">
                <h4><iconify-icon icon="mdi:eye-outline"></iconify-icon> Visi Kami</h4>
                <p style="color: #555; margin-bottom:0;">Menjadi perusahaan rental mobil terpercaya yang memberikan layanan transportasi terbaik, aman, dan nyaman bagi pelanggan.</p>
            </div>
            
            <div class="vm-card">
                <h4><iconify-icon icon="mdi:target-arrow"></iconify-icon> Misi Kami</h4>
                <ul>
                    <li>Menyediakan armada kendaraan yang berkualitas, bersih, dan terawat.</li>
                    <li>Memberikan pelayanan profesional, ramah, dan responsif kepada pelanggan.</li>
                    <li>Menawarkan harga yang kompetitif dan transparan.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- NILAI UTAMA -->
<section style="background: #fdfdfd;">
    <div class="container">
        <div class="sec-title">
            <h2>Nilai Utama Kami</h2>
            <p>Prinsip yang kami pegang untuk kepuasan perjalanan Anda</p>
        </div>

        <div class="values-grid">
            <div class="val-card">
                <div class="val-icon"><iconify-icon icon="mdi:shield-check"></iconify-icon></div>
                <h4>Keamanan</h4>
                <p>Seluruh armada terawat dengan standar tinggi dan siap digunakan kapan saja.</p>
            </div>
            <div class="val-card">
                <div class="val-icon"><iconify-icon icon="mdi:star"></iconify-icon></div>
                <h4>Kenyamanan</h4>
                <p>Memastikan pengalaman berkendara yang tenang, bersih, dan sangat nyaman.</p>
            </div>
            <div class="val-card">
                <div class="val-icon"><iconify-icon icon="mdi:account-tie"></iconify-icon></div>
                <h4>Profesional</h4>
                <p>Layanan yang responsif, tepat waktu, dan sangat bisa diandalkan.</p>
            </div>
            <div class="val-card">
                <div class="val-icon"><iconify-icon icon="mdi:hand-coin"></iconify-icon></div>
                <h4>Transparansi</h4>
                <p>Harga jujur dan jelas di awal tanpa adanya biaya tersembunyi.</p>
            </div>
        </div>
    </div>
</section>

<!-- PENCAPAIAN KAMI (BANNER) -->
<section>
    <div class="container">
        <div class="stats-container">
            <div class="stats-bg-shape"></div>
            
            <div class="sec-title" style="margin-bottom: 40px;">
                <h2 style="color: white;">Pencapaian Kami</h2>
            </div>

            <div class="stats-grid">
                <div class="stat-item">
                    <h3>10</h3>
                    <p>Armada Aktif</p>
                </div>
                <div class="stat-item">
                    <h3>100+</h3>
                    <p>Pelanggan Puas</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Dukungan Layanan</p>
                </div>
                <div class="stat-item">
                    <h3>20+</h3>
                    <p>Kota Layanan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MENGAPA MEMILIH KAMI -->
<section>
    <div class="container why-grid">
        <div>
            <div style="text-align: left; margin-bottom: 50px;">
                <h2 style="font-size: 40px; color: #111; font-weight: bold; margin-bottom: 15px;">Mengapa Memilih Kami?</h2>
                <div style="width: 70px; height: 4px; background: #1e56cd; margin: 15px 0 0; border-radius: 2px;"></div>
                <p style="font-size: 18px; color: #666; margin-top: 20px;">Berbagai alasan mengapa Vorent Malang adalah pilihan paling tepat untuk menemani perjalanan Anda.</p>
            </div>

            <div class="why-list">
                <div class="why-item">
                    <div class="why-icon"><iconify-icon icon="mdi:star-shooting-outline"></iconify-icon></div>
                    <div class="why-text">
                        <h4>Armada Premium</h4>
                        <p>Tersedia beragam pilihan kendaraan untuk berbagai kebutuhan.</p>
                    </div>
                </div>
                
                <div class="why-item">
                    <div class="why-icon"><iconify-icon icon="mdi:steering"></iconify-icon></div>
                    <div class="why-text">
                        <h4>Driver Profesional</h4>
                        <p>Didukung oleh sopir yang sangat berpengalaman dan ramah.</p>
                    </div>
                </div>

                <div class="why-item">
                    <div class="why-icon"><iconify-icon icon="mdi:cellphone-check"></iconify-icon></div>
                    <div class="why-text">
                        <h4>Proses Booking Mudah</h4>
                        <p>Reservasi armada sangat cepat dan anti ribet melalui WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img src="storage/images/banner-tentang.png" alt="Mengapa Memilih Kami" class="why-img">
        </div>
    </div>
</section>

<!-- TESTIMONI (PENGGANTI CTA) -->
<section class="testi-section">
    <div class="container">
        <div class="sec-title">
            <h2>Apa Kata Mereka?</h2>
            <p>Pengalaman nyata dari pelanggan yang telah menggunakan layanan kami</p>
        </div>

        <div class="testi-grid">
            <div class="testi-card">
                <div class="testi-stars">
                    <iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon>
                </div>
                <p class="testi-text">"Sewa Innova Reborn di sini sangat memuaskan. Mobilnya bersih luar dalam, wangi, dan mesinnya halus. Liburan keluarga di Batu jadi sangat nyaman!"</p>
                <div class="testi-user">
                    <div class="testi-avatar">A</div>
                    <div class="testi-name">
                        <h5>Ahmad</h5>
                        <span>Wisatawan Keluarga</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-stars">
                    <iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon>
                </div>
                <p class="testi-text">"Pelayanan adminnya fast response dan ramah banget. Driver yang mengantar juga tepat waktu dan sangat paham rute Malang-Bromo. Sangat direkomendasikan!"</p>
                <div class="testi-user">
                    <div class="testi-avatar">B</div>
                    <div class="testi-name">
                        <h5>Budi Santoso</h5>
                        <span>Perjalanan Bisnis</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-stars">
                    <iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star"></iconify-icon><iconify-icon icon="mdi:star-half-fill"></iconify-icon>
                </div>
                <p class="testi-text">"Harga sangat transparan, tidak ada biaya tambahan di akhir. Proses lepas kunci juga tidak berbelit-belit. Next time ke Malang pasti sewa di sini lagi."</p>
                <div class="testi-user">
                    <div class="testi-avatar">C</div>
                    <div class="testi-name">
                        <h5>Citra Kirana</h5>
                        <span>Liburan Pribadi</span>
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
            <img src="storage/images/logoputih.png" alt="Logo DER Rental">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const navMenu = document.getElementById('nav-menu');

        hamburgerBtn.addEventListener('click', function() {
            // Toggle menu masuk/keluar layar
            navMenu.classList.toggle('tampil');
            
            // Ubah ikon garis 3 jadi ikon X saat diklik
            const icon = this.querySelector('iconify-icon');
            if (icon.getAttribute('icon') === 'mdi:menu') {
                icon.setAttribute('icon', 'mdi:close');
            } else {
                icon.setAttribute('icon', 'mdi:menu');
            }
        });
    });
</script>

</body>
</html>