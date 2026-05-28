@extends('layouts.app')

@section('content')
<div class="header">
    <a href="{{ route('home') }}" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Book Appointment</h1>
</div>

<div class="content">
    <div class="steps">
        <div class="step active"><span>1</span><br>Layanan</div>
        <div class="step"><span>2</span><br>Waktu</div>
        <div class="step"><span>3</span><br>Bayar</div>
    </div>

    <p>Pilih Layanan</p>
    <p>Pilih perawatan terbaik untuk kenyamanan Anda.</p>

    <h3 class="category-title">Dewasa</h3>

    <div class="product-card">
        <h3>Haircut & Wash</h3>
        <p>
            <i class="fa-regular fa-clock"></i> 45 Menit
            <span class="price"><i class="fa-solid fa-money-bill"></i> Rp 35.000</span>
        </p>
        <form action="{{ route('booking.save.service') }}" method="POST">
    @csrf

    <input type="hidden" name="service_name" value="Haircut & Wash">
    <input type="hidden" name="duration" value="45">
    <input type="hidden" name="price" value="35000">

    <button type="submit" class="btn-dark">
        Pilih
    </button>
</form>
    </div>

    <div class="product-card">
        <h3>Beard Grooming</h3>
        <p>
            <i class="fa-regular fa-clock"></i> 30 Menit
            <span class="price"><i class="fa-solid fa-money-bill"></i> Rp 30.000</span>
        </p>
        <form action="{{ route('booking.save.service') }}" method="POST">
    @csrf

    <input type="hidden" name="service_name" value="Beard Grooming">
    <input type="hidden" name="duration" value="30">
    <input type="hidden" name="price" value="30000">

    <button type="submit" class="btn-dark">
        Pilih
    </button>
</form>
    </div>

    <h3 class="category-title">Anak-Anak</h3>

    <div style="
        height:190px;
        border-radius:12px;
        background:linear-gradient(rgba(218,172,96,.45), rgba(0,0,0,.55)),
        url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=700');
        background-size:cover;
        color:white;
        padding:95px 24px 0;
        margin-bottom:24px;
    ">
        <p>Promo Liburan Sekolah<br>Potongan 20% untuk semua kategori Anak!</p>
    </div>

    <div class="product-card">
        <h3>Cukur Lucu</h3>
        <p>
            <i class="fa-regular fa-clock"></i> 40 Menit
            <span class="price"><i class="fa-solid fa-money-bill"></i> Rp 25.000</span>
        </p>
        <form action="{{ route('booking.save.service') }}" method="POST">
    @csrf

    <input type="hidden" name="service_name" value="Cukur Lucu">
    <input type="hidden" name="duration" value="40">
    <input type="hidden" name="price" value="25000">

    <button type="submit" class="btn-dark">
        Pilih
    </button>
        </form>
    </div>

    <h3 class="category-title">Lansia</h3>

    <div class="product-card">
        <h3>Classic Cut & Massage</h3>
        <p>
            <i class="fa-regular fa-clock"></i> 60 Menit
            <span class="price"><i class="fa-solid fa-money-bill"></i> Rp 45.000</span>
        </p>
        <form action="{{ route('booking.save.service') }}" method="POST">
    @csrf

    <input type="hidden" name="service_name" value="Classic Cut & Massage">
    <input type="hidden" name="duration" value="60">
    <input type="hidden" name="price" value="45000">

    <button type="submit" class="btn-dark">
        Pilih
    </button>
</form>
    </div>
</div>

@include('partials.navbar', ['active' => 'booking'])
@endsection