<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Kontak | Vorent Malang</title>

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
text-align:center;
}

.badge{
display:inline-block;
padding:10px 18px;
border-radius:40px;
background:#dfe9ff;
color:#1e56cd;
font-weight:600;
margin-bottom:20px;
}

.hero h1{
font-size:56px;
margin-bottom:20px;
}

.hero p{
max-width:700px;
margin:auto;
font-size:20px;
color:#555;
}

section{
padding:90px 0;
}

.contact-wrapper{
display:grid;
grid-template-columns:1.2fr .8fr;
gap:50px;
align-items:start;
}

.form-card{
background:white;
padding:50px;
border-radius:30px;
box-shadow:0 12px 30px rgba(0,0,0,.07);
}

.form-card h2{
font-size:40px;
margin-bottom:15px;
}

.form-card p{
color:#667085;
margin-bottom:35px;
}

.form-group{
margin-bottom:25px;
}

label{
display:block;
font-weight:600;
margin-bottom:10px;
}

input,
textarea{
width:100%;
padding:16px 18px;
border:1px solid #d1d5db;
border-radius:14px;
font-size:16px;
outline:none;
transition:.3s;
}

input:focus,
textarea:focus{
border-color:#1e56cd;
box-shadow:0 0 0 4px rgba(30,86,205,.08);
}

textarea{
height:150px;
resize:none;
}

.btn{
display:inline-block;
padding:16px 30px;
background:#1e56cd;
color:white;
border:none;
border-radius:12px;
font-weight:bold;
cursor:pointer;
}

.info-card{
background:#f7faff;
padding:45px;
border-radius:30px;
}

.info-card h2{
font-size:38px;
margin-bottom:30px;
}

.contact-box{
background:white;
padding:25px;
border-radius:18px;
margin-bottom:20px;
box-shadow:0 6px 18px rgba(0,0,0,.04);
}

.contact-box h3{
margin-bottom:10px;
color:#1e56cd;
}

.socials{
display:flex;
gap:15px;
margin-top:30px;
flex-wrap:wrap;
}

.social-btn{
display:inline-block;
padding:12px 20px;
border:2px solid #1e56cd;
color:#1e56cd;
text-decoration:none;
border-radius:12px;
font-weight:600;
}

.map-box{
margin-top:30px;
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 6px 18px rgba(0,0,0,.04);
}

.cta{
margin-top:80px;
background:#1e56cd;
color:white;
text-align:center;
padding:90px 40px;
border-radius:32px;
}

.cta h2{
font-size:48px;
margin-bottom:20px;
}

.cta p{
font-size:20px;
margin-bottom:30px;
}

.cta a{
display:inline-block;
padding:16px 30px;
background:white;
color:#1e56cd;
text-decoration:none;
border-radius:12px;
font-weight:bold;
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

@media(max-width:950px){

.contact-wrapper,
.footer-grid{
grid-template-columns:1fr;
}

nav ul{
display:none;
}

.hero h1{
font-size:42px;
}

.form-card,
.info-card{
padding:35px;
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
<div class="container">

<span class="badge">
Hubungi Kami
</span>

<h1>
Kami Siap Membantu
Kebutuhan Perjalanan Anda
</h1>

<p>
Hubungi tim DER Rental Malang untuk pertanyaan,
reservasi, maupun konsultasi armada.
</p>

</div>
</section>



<section>
<div class="container">

<div class="contact-wrapper">

<div class="form-card">

<h2>Kirim Pesan</h2>

<p>
Isi form berikut dan tim kami akan segera merespons.
</p>

<form action="#" method="POST">

<div class="form-group">
<label>Nama Lengkap</label>
<input 
type="text"
placeholder="Masukkan nama lengkap"
required
>
</div>


<div class="form-group">
<label>Email</label>
<input 
type="email"
placeholder="Masukkan email"
required
>
</div>


<div class="form-group">
<label>Nomor HP / WhatsApp</label>
<input 
type="text"
placeholder="08xxxxxxxxxx"
required
>
</div>


<div class="form-group">
<label>Pesan</label>
<textarea
placeholder="Tulis pesan atau kebutuhan rental..."
required
></textarea>
</div>

<button class="btn">
Kirim Pesan
</button>

</form>

</div>



<div class="info-card">

<h2>Informasi Kontak</h2>

<div class="contact-box">
<h3>WhatsApp Admin</h3>
<p>+62 812 3456 7890</p>
</div>

<div class="contact-box">
<h3>Email</h3>
<p>admin@derrentalmalang.com</p>
</div>

<div class="contact-box">
<h3>Instagram</h3>
<p>@derrentalmalang</p>
</div>

<div class="contact-box">
<h3>Alamat</h3>
<p>Malang, Jawa Timur</p>
</div>


<div class="socials">

<a href="https://wa.me/6281234567890"
class="social-btn">
WhatsApp
</a>

<a href="#"
class="social-btn">
Instagram
</a>

<a href="#"
class="social-btn">
Email
</a>

</div>


<div class="map-box">
<h3>Jam Operasional</h3>
<br>
<p>Senin - Minggu</p>
<p>08.00 - 21.00 WIB</p>
</div>

</div>

</div>



<div class="cta">

<h2>
Butuh Booking Cepat?
</h2>

<p>
Untuk reservasi langsung, hubungi admin melalui WhatsApp.
</p>

<a href="https://wa.me/6281234567890">
Chat Admin
</a>

</div>

</div>
</section>



<footer>

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