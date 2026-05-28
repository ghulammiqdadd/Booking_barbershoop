@extends('layouts.app')

@section('content')
<div class="header">
    <a href="{{ route('login') }}" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Book Appointment</h1>
</div>

<div class="content center">
    <div style="font-size:60px;color:#0755d8;margin-top:30px">
        <i class="fa-solid fa-scissors"></i>
    </div>

    <h1 class="big-title" style="font-size:34px">BarberEase</h1>
    <p class="subtitle">Buat akun untuk mulai memesan<br>barbershop favoritmu.</p>

<form action="{{ route('register.process') }}" method="POST">
    @csrf

    <div style="text-align:left">
        <label class="label">Nama Lengkap</label>
        <div class="input-wrap">
            <input type="text" name="name" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <label class="label">Nomor Telepon</label>
        <div class="input-wrap">
            <input type="text" name="phone" placeholder="08xx xxxx xxxx" required>
        </div>

        <label class="label">Kata Sandi</label>
        <div class="input-wrap">
            <input type="password" name="password" placeholder="Min. 8 karakter" required>
            <i class="fa-regular fa-eye"></i>
        </div>
    </div>

    <button type="submit" class="btn-primary">Daftar Sekarang</button>
</form>

    <p style="margin-top:50px">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="link">Masuk</a>
    </p>
</div>
@endsection