<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Sewa Mobil | Vorent Malang</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
color:#1f2937;
line-height:1.7;
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
background:white;
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
background:#dfe9ff;
color:#1e56cd;
border-radius:40px;
font-weight:600;
margin-bottom:20px;
}

.hero h1{
font-size:58px;
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

.title{
text-align:center;
margin-bottom:60px;
}

.title h2{
font-size:44px;
margin-bottom:15px;
}

.title p{
color:#667085;
}

.filter-box{
display:flex;
justify-content:space-between;
align-items:center;
background:#f7faff;
padding:30px;
border-radius:22px;
margin-bottom:50px;
flex-wrap:wrap;
gap:20px;
}

.filter-box h3{
color:#1e56cd;
}

.catalog-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

.car-card{
background:white;
border-radius:24px;
overflow:hidden;
box-shadow:0 10px 28px rgba(0,0,0,.08);
transition:.3s;
}

.car-card:hover{
transform:translateY(-8px);
}

.car-image{
height:250px;
background:#dbe6ff;
display:flex;
justify-content:center;
align-items:center;
overflow:hidden;
}

.car-image img{
width:100%;
height:100%;
object-fit:cover;
}

.placeholder{
font-size:32px;
font-weight:bold;
color:#1e56cd;
}

.car-content{
padding:28px;
}

.car-content h3{
font-size:30px;
margin-bottom:18px;
}

.spec{
margin-bottom:8px;
color:#4b5563;
}

.price-box{
margin-top:25px;
padding:18px;
background:#f7faff;
border-radius:16px;
}

.price{
font-size:28px;
font-weight:bold;
color:#1e56cd;
margin:8px 0;
}

.status{
display:inline-block;
margin-top:18px;
padding:8px 14px;
border-radius:30px;
font-weight:600;
font-size:14px;
}

.available{
background:#dff5e7;
color:#15803d;
}

.unavailable{
background:#ffe0e0;
color:#dc2626;
}

.buttons{
margin-top:25px;
display:flex;
gap:12px;
flex-wrap:wrap;
}

.btn{
display:inline-block;
padding:13px 22px;
border-radius:10px;
text-decoration:none;
font-weight:bold;
}

.btn-primary{
background:#1e56cd;
color:white;
}

.btn-outline{
border:2px solid #1e56cd;
color:#1e56cd;
}

.empty{
text-align:center;
padding:80px;
background:#f7faff;
border-radius:25px;
}

.cta{
margin-top:80px;
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

@media(max-width:992px){

.catalog-grid{
grid-template-columns:1fr;
}

nav ul{
display:none;
}

.hero h1{
font-size:42px;
}

.footer-grid{
grid-template-columns:1fr;
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
Katalog Armada Rental
</span>

<h1>
Pilih Mobil Sesuai
Kebutuhan Perjalanan
</h1>

<p>
Tersedia rental lepas kunci maupun dengan sopir
untuk berbagai kebutuhan perjalanan.
</p>

</div>
</section>



<section>
<div class="container">

<div class="title">
<h2>Katalog Mobil</h2>
<p>Daftar armada tersedia untuk disewa.</p>
</div>


<div class="filter-box">
<h3>
{{ count($products) }} Armada Tersedia
</h3>

<div>
Area Operasional:
<strong>Jawa Timur</strong>
</div>
</div>


@if($products->count() > 0)

<div class="catalog-grid">

@foreach($products as $product)

<div class="car-card">

<div class="car-image">

@if($product->gambar)
<img src="{{ asset('storage/'.$product->gambar) }}">
@else
<div class="placeholder">
{{ $product->nama_produk }}
</div>
@endif

</div>


<div class="car-content">

<h3>
{{ $product->nama_produk }}
</h3>

<div class="spec">
BBM :
<strong>{{ $product->bbm }}</strong>
</div>

<div class="spec">
Fitur :
{{ $product->fitur }}
</div>

<div class="spec">
Area :
{{ $product->area_pemakaian }}
</div>

<div class="spec">
Kapasitas :
{{ $product->kapasitas }}
</div>


<div class="price-box">

<div>
Lepas Kunci
</div>

<div class="price">
Rp{{ number_format($product->harga_lepas_kunci,0,',','.') }}
</div>

<div>
Dengan Sopir mulai dari
<strong>
Rp{{ number_format($product->harga_sopir,0,',','.') }}
</strong>
</div>

</div>


@if($product->status=='tersedia')
<span class="status available">
Tersedia
</span>
@else
<span class="status unavailable">
Tidak Tersedia
</span>
@endif


<div class="buttons">

<a href="https://wa.me/6281234567890?text=Saya%20tertarik%20menyewa%20{{ urlencode($product->nama_produk) }}"
class="btn btn-primary">
Booking WA
</a>

<a href="#"
class="btn btn-outline">
Detail
</a>

</div>

</div>

</div>

@endforeach

</div>

@else

<div class="empty">
<h2>Belum ada data mobil</h2>
<p>Tambahkan data dari dashboard admin.</p>
</div>

@endif



<div class="cta">

<h2>
Butuh Bantuan Memilih Armada?
</h2>

<p>
Hubungi admin untuk konsultasi dan reservasi cepat.
</p>

<a href="https://wa.me/6281234567890"
class="btn">
Chat WhatsApp
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