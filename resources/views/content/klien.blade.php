@extends('layouts.app')

@section('title', 'Klien Kami - MotorJunClub')

@section('content')
<link rel="stylesheet" href="{{ asset('css/klien.css') }}">

<div class="container">
    <h1>Klien Kami</h1>

    <div class="client-list">
        <div class="client-item">
            <img src="{{ asset('images/klien1.jpg') }}" alt="Klien 1">
            <p>Klien 1</p>
        </div>
        <div class="client-item">
            <img src="{{ asset('images/klien2.jpg') }}" alt="Klien 2">
            <p>Klien 2</p>
        </div>
        <div class="client-item">
            <img src="{{ asset('images/klien3.jpg') }}" alt="Klien 3">
            <p>Klien 3</p>
        </div>
        <!-- Tambahkan lebih banyak klien sesuai kebutuhan -->
    </div>
</div>
@endsection
