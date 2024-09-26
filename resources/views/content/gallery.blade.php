@extends('layouts.app')

@section('title', 'Galeri Foto MotorJunClub')

@section('content')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

<div class="container">
    <h1>Galeri Foto MotorJunClub</h1>

    <div class="gallery">
        <div class="gallery-item">
            <img src="{{ asset('images/1.jpg') }}" alt="Foto 1">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/2.jpg') }}" alt="Foto 2">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/3.jpg') }}" alt="Foto 3">
        </div>
        <!-- Tambahkan lebih banyak foto sesuai kebutuhan -->
    </div>
</div>
@endsection
