<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vorent Malang</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
line-height:1.6;
color:#222;
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
background:white;
box-shadow:0 2px 10px rgba(0,0,0,.08);
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
padding-top:140px;
min-height:100vh;
background:linear-gradient(to right,#f5faff,#ffffff);
display:flex;
align-items:center;
}

.hero-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:center;
}

.hero h1{
font-size:58px;
line-height:1.2;
margin-bottom:20px;
}

.hero p{
font-size:20px;
color:#555;
margin-bottom:30px;
}

.btn{
display:inline-block;
padding:15px 30px;
border-radius:10px;
text-decoration:none;
font-weight:bold;
margin-right:15px;
}

.btn-primary{
background:#1e56cd;
color:white;
}

.btn-outline{
border:2px solid #1e56cd;
color:#1e56cd;
}

.hero img{
width:100%;
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,.1);
}

.stats{
margin-top:40px;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
}

.stat{
background:white;
padding:20px;
border-radius:15px;
text-align:center;
box-shadow:0 4px 15px rgba(0,0,0,.06);
}

.stat h3{
font-size:30px;
color:#1e56cd;
}

section{
padding:90px 0;
}

.title{
text-align:center;
margin-bottom:50px;
}

.title h2{
font-size:42px;
margin-bottom:10px;
}

.features{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.card{
background:#fafafa;
padding:35px;
border-radius:18px;
box-shadow:0 5px 20px rgba(0,0,0,.06);
}

.card h3{
margin-bottom:15px;
}

.fleet{
background:#f7fbff;
}

.car-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

.car-card{
background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.car-img{
height:220px;
background:#d6ecff;
display:flex;
justify-content:center;
align-items:center;
font-size:30px;
font-weight:bold;
}

.car-content{
padding:25px;
}

.price{
font-size:28px;
font-weight:bold;
color:#1e56cd;
margin:15px 0;
}

.about{
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:center;
}

.about-box{
background:#f5faff;
padding:40px;
border-radius:25px;
}

.cta{
background:#1e56cd;
color:white;
text-align:center;
padding:90px 40px;
border-radius:30px;
}

.cta h2{
font-size:48px;
margin-bottom:20px;
}

.cta .btn{
background:white;
color:#1e56cd;
margin-top:20px;
}

footer{
background:#111;
color:white;
margin-top:80px;
padding:60px 0 30px;
}

.footer-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
margin-bottom:40px;
}

.copy{
text-align:center;
opacity:.7;
}

@media(max-width:900px){

.hero-grid,
.features,
.car-grid,
.about{
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
<h1>Rental Mobil Profesional Untuk Perjalanan Nyaman</h1>

<p>
Sewa mobil lepas kunci maupun dengan sopir
untuk perjalanan pribadi, bisnis, dan wisata.
</p>

<a href="/katalog" class="btn btn-primary">
Lihat Katalog
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
<img src="https://www.kayanaprimawisata.co.id/storage/2026/01/Sewa-Mobil-Malang-Lebaran-Tahun-Termurah.jpg">
</div>

</div>
</section>


<section>
<div class="container">

<div class="title">
<h2>Kenapa Memilih Kami</h2>
<p>Layanan rental terpercaya dan profesional</p>
</div>

<div class="features">

<div class="card">
<h3>Armada Terawat</h3>
<p>Unit bersih, nyaman, dan rutin servis.</p>
</div>

<div class="card">
<h3>Harga Transparan</h3>
<p>Tanpa biaya tersembunyi.</p>
</div>

<div class="card">
<h3>Driver Profesional</h3>
<p>Sopir berpengalaman dan ramah.</p>
</div>

<div class="card">
<h3>Fast Response</h3>
<p>Reservasi cepat via WhatsApp.</p>
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

<div>
<h2 style="font-size:46px;margin-bottom:20px;">
Partner Perjalanan Terpercaya
</h2>

<p>
Kami menyediakan layanan rental mobil
untuk kebutuhan wisata, bisnis,
dan perjalanan keluarga.
</p>

</div>

<div class="about-box">
<h3>Layanan Kami</h3>
<br>
<p>• Rental Lepas Kunci</p>
<p>• Rental Dengan Sopir</p>
<p>• Antar Jemput</p>
</div>

</div>
</section>


<section>
<div class="container">

<div class="cta">
<h2>Siap Menyewa Mobil Hari Ini?</h2>

<p>
Hubungi admin dan pilih armada terbaik.
</p>

<a href="https://wa.me/6281234567890"
class="btn">
Booking via WhatsApp
</a>

</div>

</div>
</section>


<footer id="kontak">

<div class="container">

<div class="footer-grid">

<div>
<h3>DER Rental Malang</h3>
<p>Rental mobil area Jawa Timur.</p>
</div>

<div>
<h3>Layanan</h3>
<p>Rental Harian</p>
<p>Dengan Sopir</p>
<p>Wisata</p>
</div>

<div>
<h3>Kontak</h3>
<p>0812-5634-1845</p>
<p>Malang, Jawa Timur</p>
</div>

</div>

<div class="copy">
Copyright © 2026 Vorent Malang
</div>

</div>

</footer>

</body>
</html>