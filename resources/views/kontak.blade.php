<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Kontak | Vorent Malang</title>

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
    line-height: 1.7;
    color: #1f2937;
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
    background: #fff;
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

nav a:hover {
    color: #1e56cd;
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

/* ============================
   HERO SECTION
   ============================ */
.hero {
    padding-top: 160px;
    padding-bottom: 100px;
    background: linear-gradient(135deg, #eef4ff 0%, #ffffff 100%);
    text-align: center;
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    border-radius: 40px;
    background: #dfe9ff;
    color: #1e56cd;
    font-weight: bold;
    margin-bottom: 25px;
    font-size: 15px;
}

.hero h1 {
    font-size: 52px;
    margin-bottom: 20px;
    color: #111;
    font-weight: bold;
}

.hero p {
    max-width: 700px;
    margin: auto;
    font-size: 18px;
    color: #555;
    line-height: 1.8;
}

/* ============================
   CONTACT CARDS (HORIZONTAL)
   ============================ */
.contact-section {
    padding: 60px 0 90px;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: -60px; /* Membuat kartu sedikit menabrak hero section */
}

.contact-card {
    background: white;
    padding: 40px 25px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    border: 1px solid #f0f4f8;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Efek hover khusus untuk link */
a.contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(30, 86, 205, 0.1);
    border-color: #d6ecff;
}

.icon-box {
    width: 75px;
    height: 75px;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    margin-bottom: 20px;
    transition: 0.3s;
}

/* Warna unik untuk masing-masing platform */
.icon-wa { background: #dcfce7; color: #16a34a; }
.icon-ig { background: #fce7f3; color: #db2777; }
.icon-tk { background: #eeeeee; color: #c0c0c0; }
.icon-time { background: #e8f0ff; color: #1e56cd; }

.contact-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #111;
}

.contact-card p {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
}

.contact-action {
    margin-top: 15px;
    font-size: 14px;
    font-weight: bold;
    color: #1e56cd;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* ============================
   FAQ SECTION
   ============================ */
.faq-section {
    background: #ffffff;
    padding: 90px 0;
}

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

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-box {
    background: #f8fbff;
    border: 1px solid #eef4ff;
    border-radius: 16px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
}

.faq-box:hover {
    border-color: #d6ecff;
}

.faq-question {
    padding: 22px 25px;
    font-size: 18px;
    font-weight: bold;
    color: #111;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none; /* Menghilangkan panah bawaan browser */
}

.faq-question::-webkit-details-marker {
    display: none;
}

.toggle-icon {
    font-size: 24px;
    color: #1e56cd;
    transition: transform 0.3s ease;
}

/* Saat FAQ terbuka, ikon berputar 45 derajat (menjadi tanda silang) */
.faq-box[open] .toggle-icon {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 25px 25px;
    color: #555;
    font-size: 16px;
    line-height: 1.8;
}

/* ============================
   FOOTER (Sesuai Code Lama)
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
@media(max-width:950px){
    nav ul {
        display: none;
    }

    .hero h1 {
        font-size: 40px;
    }

    .contact-grid,
    .footer-grid {
        grid-template-columns: 1fr;
    }

    .contact-grid {
        margin-top: 0;
        gap: 20px;
    }

    .footer-grid {
        text-align: center;
    }

    .footer-logo img, 
    .footer-logo p {
        margin-left: auto;
        margin-right: auto;
    }

    .contact-item {
        justify-content: center;
    }
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
            <li><a href="/sewa-mobil" class="{{ request()->is('sewa-mobil*') ? 'active' : '' }}">Sewa Mobil</a></li>
            <li><a href="/kontak" class="active">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <span class="badge">
            <iconify-icon icon="mdi:headset-mic"></iconify-icon> Pusat Layanan Bantuan
        </span>
        <h1>Hubungi Tim Vorent Malang</h1>
        <p>Punya pertanyaan seputar layanan rental mobil kami? Jangan ragu untuk menghubungi kami melalui platform resmi di bawah ini.</p>
    </div>
</section>

<!-- CONTACT CARDS (HORIZONTAL) -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            
            <!-- WhatsApp -->
            <a href="https://wa.me/6281256341845" target="_blank" class="contact-card">
                <div class="icon-box icon-wa">
                    <iconify-icon icon="mdi:whatsapp"></iconify-icon>
                </div>
                <h3>WhatsApp</h3>
                <p>Chat langsung dengan admin untuk respon tercepat.</p>
                <div class="contact-action">
                    Hubungi Sekarang <iconify-icon icon="mdi:arrow-right"></iconify-icon>
                </div>
            </a>

            <!-- Instagram -->
            <a href="https://instagram.com/vorent_malang" target="_blank" class="contact-card">
                <div class="icon-box icon-ig">
                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                </div>
                <h3>Instagram</h3>
                <p>Lihat update armada dan promo terbaru kami.</p>
                <div class="contact-action">
                    @vorent_malang <iconify-icon icon="mdi:arrow-right"></iconify-icon>
                </div>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@vorent_malang" target="_blank" class="contact-card">
                <div class="icon-box icon-tk">
                    <iconify-icon icon="logos:tiktok-icon"></iconify-icon>
                </div>
                <h3>TikTok</h3>
                <p>Tonton video review kendaraan dan keseruan kami.</p>
                <div class="contact-action">
                    @vorent_malang <iconify-icon icon="mdi:arrow-right"></iconify-icon>
                </div>
            </a>

            <!-- Jam Operasional (Bukan Link) -->
            <div class="contact-card" style="cursor: default;">
                <div class="icon-box icon-time">
                    <iconify-icon icon="mdi:clock-outline"></iconify-icon>
                </div>
                <h3>Jam Operasional</h3>
                <p style="font-weight: bold; color: #111;">Senin - Minggu</p>
                <p>24 jam siap melayani Anda</p>
            </div>

        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
    <div class="container">
        <div class="sec-title">
            <h2>Pertanyaan Populer (FAQ)</h2>
            <p>Temukan jawaban cepat untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="faq-container">
            <!-- FAQ 1 -->
            <details class="faq-box">
                <summary class="faq-question">
                    Apa saja syarat menyewa mobil lepas kunci?
                    <iconify-icon icon="mdi:plus" class="toggle-icon"></iconify-icon>
                </summary>
                <div class="faq-answer">
                    Syarat menyewa mobil lepas kunci cukup mudah. Anda hanya perlu menyiapkan dokumen identitas asli berupa E-KTP, SIM A yang masih aktif, dan satu identitas pendukung lainnya (seperti KK, NPWP, atau ID Card Perusahaan).
                </div>
            </details>

            <!-- FAQ 2 -->
            <details class="faq-box">
                <summary class="faq-question">
                    Apakah harga sewa sudah termasuk BBM dan Tol?
                    <iconify-icon icon="mdi:plus" class="toggle-icon"></iconify-icon>
                </summary>
                <div class="faq-answer">
                    Untuk layanan <strong>Sewa Lepas Kunci</strong>, harga belum termasuk BBM, Tol, dan parkir. Sedangkan untuk <strong>Sewa dengan Sopir (All In)</strong>, kami memiliki paket yang sudah mencakup biaya Sopir dan BBM. Biaya Tol dan parkir tetap menjadi tanggungan penyewa sesuai pemakaian.
                </div>
            </details>

            <!-- FAQ 3 -->
            <details class="faq-box">
                <summary class="faq-question">
                    Apakah melayani pengiriman mobil ke Bandara/Stasiun?
                    <iconify-icon icon="mdi:plus" class="toggle-icon"></iconify-icon>
                </summary>
                <div class="faq-answer">
                    Ya, tentu saja! Kami menyediakan layanan antar-jemput armada ke Bandara Abdul Rachman Saleh, Stasiun Malang Kota Baru, maupun alamat hotel tempat Anda menginap. (Syarat & ketentuan jarak berlaku).
                </div>
            </details>

            <!-- FAQ 4 -->
            <details class="faq-box">
                <summary class="faq-question">
                    Bagaimana prosedur pembatalan pemesanan?
                    <iconify-icon icon="mdi:plus" class="toggle-icon"></iconify-icon>
                </summary>
                <div class="faq-answer">
                    Pembatalan maksimal dilakukan H-1 sebelum hari keberangkatan. Jika pembatalan dilakukan secara mendadak pada hari H, DP (Down Payment) yang sudah masuk akan dianggap hangus. Silakan hubungi admin kami untuk informasi lebih detail.
                </div>
            </details>
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