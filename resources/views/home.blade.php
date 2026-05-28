@extends('layouts.app')

@section('content')
<div class="header">
    <a href="{{ route('login') }}" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Book Appointment</h1>
</div>

<div class="content">
    <div class="hero">
        <h2>Halo, Selamat Datang.</h2>
        <p>Temukan gaya terbaik Anda bersama BarberEase.</p>
    </div>

    <a href="{{ route('booking.service') }}" class="btn-primary" style="margin-top:24px">
        BOOK NOW <i class="fa-regular fa-calendar-days"></i>
    </a>

    <h2 style="margin-top:45px">Our Special Services</h2>

    <div class="service-card">
        <div class="circle yellow"><i class="fa-regular fa-face-smile"></i></div>
        <h3>Kids</h3>
        <p>Cukuran ramah anak dengan kesabaran ekstra.</p>
    </div>

    <div class="service-card">
        <div class="circle blue"><i class="fa-regular fa-user"></i></div>
        <h3>Adults</h3>
        <p>Gaya modern dan klasik untuk penampilan profesional.</p>
    </div>

    <div class="service-card">
        <div class="circle red"><i class="fa-solid fa-person-cane"></i></div>
        <h3>Seniors</h3>
        <p>Layanan tenang dan nyaman khusus lansia.</p>
    </div>

    <h2 style="margin-top:45px">Pesanan Terakhir</h2>

    <div class="empty">
        <i class="fa-regular fa-calendar" style="font-size:48px;color:#b7bfd3"></i>
        <h3>Belum ada pesanan</h3>
        <p>Jadwalkan potong rambut pertama Anda hari ini!</p>
    </div>
</div>

@include('partials.navbar', ['active' => 'home'])
@endsection