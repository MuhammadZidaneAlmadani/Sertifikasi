@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/produk.css') }}">
<div class="container">
    <h1>Produk Kami</h1>
    <p>Kami menyediakan berbagai produk berkualitas tinggi yang dapat memenuhi kebutuhan Anda.</p>

    <div class="product-list">
        <div class="product-item">
            <div class="product-image">
                <!-- Gambar produk 1 -->
                <img src="{{ asset('images/scoopy.png') }}" alt="Scoopy">
            </div>
            <div class="product-info">
                <h2>Scoopy</h2>
                <p>Honda Scoopy hadir dengan desain retro modern yang stylish dan unik, dilengkapi dengan fitur-fitur canggih seperti LED Projector, power charger, serta bagasi luas. Skuter ini ideal untuk penggunaan harian dengan konsumsi bahan bakar yang efisien dan teknologi eSP yang mendukung performa maksimal.</p>
            </div>
        </div>

        <div class="product-item">
            <div class="product-image">
                <!-- Gambar produk 2 -->
                <img src="{{ asset('images/cbr.png') }}" alt="CBR">
            </div>
            <div class="product-info">
                <h2>CBR</h2>
                <p>Honda CBR adalah motor sport premium dengan performa tinggi dan desain aerodinamis yang terinspirasi dari MotoGP. Ditenagai mesin DOHC 150cc yang mampu menghasilkan tenaga besar, motor ini sangat cocok untuk pengendara yang mencari pengalaman berkendara yang bertenaga dan penuh adrenalin.</p>
            </div>
        </div>

        <div class="product-item">
            <div class="product-image">
                <!-- Gambar produk 3 -->
                <img src="{{ asset('images/vario.png') }}" alt="Vario">
            </div>
            <div class="product-info">
                <h2>Vario</h2>
                <p>Honda Vario adalah skuter matik dengan mesin 150cc yang tangguh dan bertenaga, dilengkapi teknologi Idling Stop System yang membantu menghemat bahan bakar. Desainnya modern dengan lampu LED, rem CBS, serta fitur keamanan keyless, membuat Vario menjadi pilihan terbaik untuk mobilitas di perkotaan.</p>
            </div>
        </div>
    </div>
</div>
@endsection
