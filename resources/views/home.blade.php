@extends('layouts.app')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<div class="home-container">
    <h2>Selamat Datang di MotorJunClub</h2>
    <p>MotorJunClub adalah komunitas motor yang solid, tempat berkumpulnya para penggemar otomotif yang berbagi semangat dan kecintaan terhadap kendaraan roda dua. Sejak terbentuk pada tahun 2010, kami berfokus pada kegiatan-kegiatan yang memajukan persaudaraan, keselamatan berkendara, serta partisipasi dalam acara-acara motor yang mendukung lingkungan dan komunitas lokal.</p>

    <div class="home-links">
        <h3>Jelajahi Lebih Lanjut:</h3>
        <ul>
            <li><a href="{{ url('/about-us') }}">Tentang Kami</a> - Pelajari lebih lanjut tentang perjalanan kami dan nilai-nilai yang kami pegang.</li>
            <li><a href="{{ url('/visi-misi') }}">Visi & Misi</a> - Temukan visi kami untuk masa depan dan misi yang mendorong kami maju.</li>
            <li><a href="{{ url('/produk') }}">Produk Kami</a> - Lihat berbagai produk inovatif yang kami tawarkan untuk kebutuhan mobilitas Anda.</li>
            <li><a href="{{ url('/kontak') }}">Hubungi Kami</a> - Butuh informasi lebih lanjut? Jangan ragu untuk menghubungi kami.</li>
            <li><a href="{{ url('/profile') }}">Profile Perusahaan</a> - Lihat lebih dalam tentang siapa kami dan apa yang membuat kami berbeda.</li>
        </ul>
    </div>
</div>
@endsection
