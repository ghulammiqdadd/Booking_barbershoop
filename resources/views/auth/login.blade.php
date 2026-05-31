@extends('layouts.app')

@section('content')
<div class="header">
    <a href="#" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Masuk</h1>
</div>

<div class="content center">
    <div class="logo-box">
        <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?w=500">
    </div>

    <h1 class="big-title">Selamat Datang!</h1>
    <p class="subtitle">Siap untuk tampil lebih rapi hari ini?</p>

    <form action="{{ route('login.process') }}" method="POST">

    @csrf

    <div style="text-align:left">

        <label class="label">Nomor HP</label>

        <div class="input-wrap">
            <i class="fa-regular fa-user"></i>

            <input
                type="text"
                name="phone"
                placeholder="Contoh: 08123456789"
                value="{{ old('phone') }}"
                required
            >
        </div>

        @error('phone')
            <small style="color:red">{{ $message }}</small>
        @enderror

        <label class="label">Kata Sandi</label>

        <div class="input-wrap">
            <i class="fa-solid fa-lock"></i>

            <input
                type="password"
                name="password"
                placeholder="Masukkan kata sandi"
                required
            >

            <i class="fa-regular fa-eye"></i>
        </div>

        @error('password')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <p style="text-align:right; margin-top:22px">
        <a href="{{ route('forgot.password') }}" class="link">Lupa Kata Sandi?</a>
    </p>

    <button type="submit" class="btn-primary">
        <i class="fa-solid fa-right-to-bracket"></i>
        Masuk
    </button>

    </form>
    <div class="divider">
        <span></span> Atau <span></span>
    </div>

    <div class="google-btn">Lanjut dengan Google</div>

    <p style="margin-top:45px">Belum punya akun?</p>
    <a href="{{ route('register') }}" class="register-btn">Daftar di sini</a>
</div>
@endsection