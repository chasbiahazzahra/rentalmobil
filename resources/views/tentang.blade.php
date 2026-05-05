<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Tentang Kami | Vorent Malang</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
line-height:1.7;
color:#1f2937;
background:#fff;
}

.container{
width:90%;
max-width:1200px;
margin:auto;
}

nav{
position:fixed;
top:0;
width:100%;
background:#fff;
box-shadow:0 2px 10px rgba(0,0,0,.06);
z-index:1000;
}

.nav-wrapper{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 0;
}

.logo img{
height:45px;
object-fit:contain;
}

nav ul{
display:flex;
gap:30px;
list-style:none;
}

nav a{
position:relative;
text-decoration:none;
color:#222;
font-weight:500;
padding-bottom:10px;
}

nav a.active{
color:#1e56cd;
font-weight:700;
}

nav a.active::after{
content:'';
position:absolute;
left:0;
bottom:0;
width:100%;
height:2px;
background:#1e56cd;
}

.hero{
padding-top:150px;
padding-bottom:90px;
background:linear-gradient(to right,#eef4ff,#ffffff);
}

.hero-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:center;
}

.badge{
display:inline-block;
padding:10px 18px;
border-radius:50px;
background:#dfe9ff;
color:#1e56cd;
font-weight:600;
margin-bottom:20px;
}

.hero h1{
font-size:58px;
line-height:1.2;
margin-bottom:25px;
}

.hero p{
font-size:20px;
color:#555;
margin-bottom:30px;
}

.btn{
display:inline-block;
padding:15px 32px;
text-decoration:none;
border-radius:12px;
font-weight:bold;
}

.btn-primary{
background:#1e56cd;
color:#fff;
}

.hero img{
width:100%;
border-radius:24px;
box-shadow:0 15px 35px rgba(0,0,0,.08);
}

section{
padding:90px 0;
}

.title{
text-align:center;
margin-bottom:55px;
}

.title h2{
font-size:44px;
margin-bottom:15px;
}

.title p{
color:#667085;
}

.story{
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:center;
}

.story-box{
background:#f5f9ff;
padding:45px;
border-radius:25px;
}

.story-box h3{
margin-bottom:20px;
font-size:32px;
}

.values{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.value-card{
padding:35px;
border-radius:22px;
background:white;
box-shadow:0 8px 24px rgba(0,0,0,.06);
}

.value-card h3{
margin-bottom:15px;
}

.stats{
background:#f7faff;
}

.stats-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.stat{
background:white;
padding:35px;
text-align:center;
border-radius:20px;
box-shadow:0 8px 25px rgba(0,0,0,.05);
}

.stat h3{
font-size:42px;
color:#1e56cd;
margin-bottom:10px;
}

.why{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

.why-card{
padding:35px;
border-radius:22px;
background:#fafafa;
box-shadow:0 8px 20px rgba(0,0,0,.05);
}

.why-card h3{
margin-bottom:15px;
}

.cta{
background:#1e56cd;
color:white;
padding:90px 40px;
border-radius:32px;
text-align:center;
}

.cta h2{
font-size:48px;
margin-bottom:20px;
}

.cta p{
font-size:20px;
margin-bottom:30px;
}

.cta .btn{
background:white;
color:#1e56cd;
}

footer{
margin-top:90px;
background:#111827;
color:white;
padding:70px 0 30px;
}

.footer-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
margin-bottom:35px;
}

.copy{
text-align:center;
opacity:.7;
}

@media(max-width:900px){

.hero-grid,
.story,
.values,
.stats-grid,
.why{
grid-template-columns:1fr;
}

nav ul{
display:none;
}

.hero h1{
font-size:42px;
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

<span class="badge">
Partner Perjalanan Terpercaya
</span>

<h1>
Membantu Perjalanan Lebih Aman, Nyaman, dan Profesional
</h1>

<p>
DER Rental Malang hadir sebagai solusi rental mobil dengan armada berkualitas,
pelayanan profesional, dan pengalaman berkendara yang nyaman.
</p>

<a href="/sewa-mobil" class="btn btn-primary">
Lihat Armada
</a>

</div>

<div>
<img src="https://www.kayanaprimawisata.co.id/storage/2026/01/Sewa-Mobil-Malang-Lebaran-Tahun-Termurah.jpg">
</div>

</div>
</section>



<section>
<div class="container">

<div class="title">
<h2>Tentang DER Rental Malang</h2>
<p>Rental mobil modern dengan layanan terpercaya.</p>
</div>

<div class="story">

<div>
<h2 style="font-size:42px;margin-bottom:20px;">
Mitra Transportasi Untuk Berbagai Kebutuhan
</h2>

<p>
Kami menyediakan layanan sewa mobil untuk kebutuhan perjalanan pribadi,
keluarga, wisata, bisnis, hingga corporate travel.
</p>

<br>

<p>
Dengan komitmen pada kualitas, kami menghadirkan armada yang terawat, 
aman, dan nyaman digunakan. Didukung oleh pelayanan yang profesional, 
cepat, dan transparan, kami berupaya memberikan pengalaman perjalanan 
terbaik bagi setiap pelanggan.
</p>

</div>

<div class="story-box">

<h3>Visi Kami</h3>

<p>
Menjadi perusahaan rental mobil terpercaya yang memberikan layanan 
transportasi terbaik, aman, dan nyaman bagi pelanggan.
</p>

<br>

<h3>Misi Kami</h3>

<p>
1. Menyediakan armada kendaraan yang berkualitas, bersih, dan terawat.<br>
2. Memberikan pelayanan profesional, ramah, dan responsif kepada pelanggan.<br>
3. Menawarkan harga yang kompetitif dan transparan.
</p>

</div>

</div>

</div>
</section>



<section>
<div class="container">

<div class="title">
<h2>Nilai Utama Kami</h2>
</div>

<div class="values">

<div class="value-card">
<h3>Keamanan</h3>
<p>Armada terawat dan siap digunakan.</p>
</div>

<div class="value-card">
<h3>Kenyamanan</h3>
<p>Pengalaman berkendara yang nyaman.</p>
</div>

<div class="value-card">
<h3>Profesional</h3>
<p>Layanan responsif dan terpercaya.</p>
</div>

<div class="value-card">
<h3>Transparansi</h3>
<p>Harga jelas tanpa biaya tersembunyi.</p>
</div>

</div>

</div>
</section>



<section class="stats">
<div class="container">

<div class="title">
<h2>Pencapaian Kami</h2>
</div>

<div class="stats-grid">

<div class="stat">
<h3>10</h3>
<p>Armada Aktif</p>
</div>

<div class="stat">
<h3>100+</h3>
<p>Pelanggan</p>
</div>

<div class="stat">
<h3>24/7</h3>
<p>Layanan</p>
</div>

<div class="stat">
<h3>20+</h3>
<p>Kota Layanan</p>
</div>

</div>

</div>
</section>



<section>
<div class="container">

<div class="title">
<h2>Mengapa Memilih Kami</h2>
</div>

<div class="why">

<div class="why-card">
<h3>Armada Premium</h3>
<p>Beragam pilihan kendaraan untuk berbagai kebutuhan.</p>
</div>

<div class="why-card">
<h3>Driver Profesional</h3>
<p>Sopir berpengalaman dan pelayanan ramah.</p>
</div>

<div class="why-card">
<h3>Booking Mudah</h3>
<p>Reservasi cepat melalui WhatsApp admin.</p>
</div>

</div>

</div>
</section>



<section>
<div class="container">

<div class="cta">

<h2>
Siap Memulai Perjalanan Bersama Kami?
</h2>

<p>
Temukan armada terbaik untuk perjalanan Anda.
</p>

<a href="https://wa.me/6281234567890"
class="btn">
Hubungi Admin
</a>

</div>

</div>
</section>



<footer id="kontak">

<div class="container">

<div class="footer-grid">

<div>
<h3>DER Rental Malang</h3>
<p>Rental mobil profesional area Jawa Timur.</p>
</div>

<div>
<h3>Layanan</h3>
<p>Rental Harian</p>
<p>Dengan Sopir</p>
<p>Corporate Travel</p>
</div>

<div>
<h3>Kontak</h3>
<p>0812-3456-7890</p>
<p>Malang, Jawa Timur</p>
</div>

</div>

<div class="copy">
Copyright © 2026 DER Rental Malang
</div>

</div>

</footer>

</body>
</html>