@extends('layouts.app')

@section('title', 'Artikel MotorJunClub')

@section('content')
<link rel="stylesheet" href="{{ asset('css/artikel.css') }}">

<div class="container">
    <h1>Artikel MotorJunClub</h1>

    <div class="artikel-content">
        <h2>Judul Artikel</h2>
        <p class="author">Ditulis oleh Admin | 26 September 2024</p>
        <img src="{{ asset('images/club.png') }}" alt="Gambar Artikel" class="artikel-image">
        <p>MotorJunClub adalah komunitas pecinta motor yang berdedikasi untuk mempertemukan para penggemar motor dari berbagai kalangan. Dengan misi untuk membangun jaringan sosial di antara anggota, kami menyelenggarakan berbagai acara, termasuk touring, pameran, dan sesi edukasi tentang perawatan serta modifikasi motor.</p>
        <p>Di MotorJunClub, setiap anggota memiliki kesempatan untuk berbagi pengalaman dan pengetahuan tentang dunia otomotif. Kami percaya bahwa berbagi informasi dan saling mendukung adalah kunci untuk meningkatkan keterampilan serta kecintaan terhadap motor. Bergabunglah dengan kami dan nikmati berbagai kegiatan menarik sambil memperluas jaringan pertemanan!</p>
        <p class="footer-note">Tetap update dengan artikel terbaru dari MotorJunClub!</p>
    </div>
</div>
@endsection
