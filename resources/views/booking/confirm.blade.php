@extends('layouts.app')

@section('content')
<div class="header">
    <a href="{{ route('booking.time') }}" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Book Appointment</h1>
</div>

<div class="content">
    <div class="steps">
        <div class="step active"><span>1</span><br>Layanan</div>
        <div class="step active"><span>2</span><br>Waktu</div>
        <div class="step active"><span>3</span><br>Konfirmasi</div>
    </div>

    <h1 style="font-size:30px;text-align:center;margin:40px 0">
        Konfirmasi Pesanan
    </h1>

    <div class="confirm-card">
        <b>Jenis Layanan</b><br>
        {{ session('service_name') }}

        <hr>

        <p>Durasi <b style="float:right">{{ session('duration') }} Menit</b></p>
    </div>

    <div class="confirm-card">
        <b>Barber Pilihan</b><br>
        {{ session('barber') }}

        <hr>

        <p>Rating <b style="float:right;color:#111">☆ 4.9</b></p>
    </div>

    <div class="confirm-card">
        <b>Tanggal & Waktu</b><br>
        {{ session('date') }}

        <div style="
            background:#0755d8;
            color:white;
            border-radius:9px;
            text-align:center;
            padding:14px;
            font-size:24px;
            font-weight:700;
            margin-top:20px;
        ">
            <i class="fa-regular fa-clock"></i>
            {{ session('time') }} WIB
        </div>
    </div>

    <div class="payment-box">
        <b style="letter-spacing:2px;color:#dce7ff">TOTAL PEMBAYARAN</b>

        <h2>
            Rp {{ number_format(session('price'), 0, ',', '.') }}
        </h2>

        <div style="
            border:1px solid #6e7b91;
            border-radius:12px;
            padding:14px;
            margin-top:20px;
            background:rgba(255,255,255,.08);
        ">
            <i class="fa-solid fa-shield-halved"></i>
            <b> Harga Nett / Termasuk Pajak</b>
        </div>
    </div>

    <form action="{{ route('booking.pay') }}" method="POST">
        @csrf

        <button type="submit" class="btn-primary">
            <i class="fa-solid fa-money-bill"></i>
            Konfirmasi & Bayar
        </button>
    </form>

    <p style="text-align:center;margin-top:30px">
        Dengan menekan tombol di atas, Anda menyetujui
        <a href="#" class="link">Syarat & Ketentuan</a> yang berlaku.
    </p>
</div>

@include('partials.navbar', ['active' => 'booking'])
@endsection 