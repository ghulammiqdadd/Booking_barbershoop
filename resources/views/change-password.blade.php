@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('profile') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Ubah Kata Sandi</h1>
</div>

<div class="content">

<form action="{{ route('password.update') }}" method="POST">

    @csrf

    <label>Password Lama</label>

    <input
        type="password"
        name="current_password"
        class="input-wrap"
        style="width:100%"
        required
    >

    @error('current_password')
        <small style="color:red">{{ $message }}</small>
    @enderror

    <br><br>

    <label>Password Baru</label>

    <input
        type="password"
        name="new_password"
        class="input-wrap"
        style="width:100%"
        required
    >

    <br><br>

    <label>Konfirmasi Password Baru</label>

    <input
        type="password"
        name="new_password_confirmation"
        class="input-wrap"
        style="width:100%"
        required
    >

    <br><br>

    <button
        type="submit"
        class="btn-primary">
        Simpan Password Baru
    </button>

</form>

</div>

@endsection