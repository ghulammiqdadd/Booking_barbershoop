@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('login') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Lupa Kata Sandi</h1>
</div>

<div class="content center">

    <div style="font-size:60px;color:#0755d8;margin-top:30px">
        <i class="fa-solid fa-lock-open"></i>
    </div>

    <h1 class="big-title" style="font-size:32px">
        Reset Password
    </h1>

    <p class="subtitle">
        Masukkan nomor HP akun Anda dan buat password baru.
    </p>

    <form action="{{ route('reset.password') }}" method="POST">

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

            <label class="label">Password Baru</label>

            <div class="input-wrap">
                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    required
                >
            </div>

            @error('password')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label class="label">Konfirmasi Password Baru</label>

            <div class="input-wrap">
                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Ulangi password baru"
                    required
                >
            </div>

        </div>

        <button type="submit" class="btn-primary">
            <i class="fa-solid fa-key"></i>
            Reset Password
        </button>

    </form>

</div>

@endsection