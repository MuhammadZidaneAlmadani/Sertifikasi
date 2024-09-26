@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
<div class="container">
    <h1>Kontak MotorJunClub</h1>
    <p>Ingin bergabung atau mengetahui lebih banyak tentang kegiatan kami? Silahkan hubungi kami melalui informasi di bawah ini:</p>
    <ul>
        <li>Email: info@motorjunclub.com</li>
        <li>Telepon: +62 123 456 7890</li>
        <li>Alamat: Jl. Merdeka No. 123, Jakarta, Indonesia</li>
    </ul>
    <p>Atau isi formulir kontak di bawah ini untuk bertanya atau bergabung dengan MotorJunClub:</p>
    <form action="/send-message" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>
@endsection
