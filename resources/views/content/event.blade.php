@extends('layouts.app')

@section('title', 'Event MotorJunClub')

@section('content')
<link rel="stylesheet" href="{{ asset('css/event.css') }}">

<div class="container">
    <h1>Event MotorJunClub</h1>

    <div class="event-content">
        <h2>MotorJunClub Gathering 2024</h2>
        <p class="date">Tanggal: 20 Oktober 2024</p>
        <p class="location">Lokasi: Jakarta Convention Center, Jakarta</p>
        <img src="{{ asset('images/jakarta.jpeg') }}" alt="Gambar Event Gathering" class="event-image">
        <p>Bergabunglah dengan kami di MotorJunClub Gathering 2024 untuk bertemu dengan sesama penggemar otomotif, berbagi pengalaman, dan belajar lebih banyak tentang teknologi kendaraan terbaru. Acara ini akan diisi dengan berbagai kegiatan menarik seperti pameran kendaraan, diskusi panel, dan test drive.</p>
    </div>

    <div class="event-content">
        <h2>MotorJunClub Roadshow 2024</h2>
        <p class="date">Tanggal: 5 November 2024</p>
        <p class="location">Lokasi: Surabaya Town Square, Surabaya</p>
        <img src="{{ asset('images/surabaya.png') }}" alt="Gambar Event Roadshow" class="event-image">
        <p>Ikuti MotorJunClub Roadshow 2024 di Surabaya! Dalam event ini, kami akan memamerkan produk-produk terbaru dari MotorJun dan memberikan kesempatan kepada peserta untuk mencoba langsung kendaraan kami. Pastikan Anda hadir dan merasakan pengalaman berkendara yang mengesankan!</p>
    </div>

    <div class="event-content">
        <h2>MotorJunClub Charity Ride</h2>
        <p class="date">Tanggal: 18 Desember 2024</p>
        <p class="location">Lokasi: Bali</p>
        <img src="{{ asset('images/bali.png') }}" alt="Gambar Event Charity Ride" class="event-image">
        <p>Dalam rangka mendukung kegiatan sosial, MotorJunClub akan mengadakan Charity Ride di Bali. Acara ini bertujuan untuk mengumpulkan dana bagi yayasan amal dan membantu mereka yang membutuhkan. Ayo ikut serta dalam perjalanan amal ini dan jadikan perbedaan bersama MotorJunClub.</p>
    </div>
</div>
@endsection
