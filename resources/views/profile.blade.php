@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('home') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Profil Saya</h1>
</div>

<div class="content">

    <div class="profile-card">

        @if($user->photo)
            <img
                src="{{ asset($user->photo) }}"
                style="
                    width:90px;
                    height:90px;
                    border-radius:50%;
                    object-fit:cover;
                    border:3px solid #0755d8;
                ">
        @else
            <img
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300"
                style="
                    width:90px;
                    height:90px;
                    border-radius:50%;
                    object-fit:cover;
                    border:3px solid #0755d8;
                ">
        @endif

        <div>
            <h2>{{ $user->name }}</h2>

            <p>{{ $user->phone }}</p>

            <div class="member-badge">
                <i class="fa-regular fa-star"></i>
                Platinum Member
            </div>
        </div>

    </div>

    <div class="profile-stats">

        <div class="stat-blue">
            <i class="fa-solid fa-money-bill"></i>

            <p>Total Transaksi</p>

            <h2>
                Rp {{ number_format($totalTransaksi, 0, ',', '.') }}
            </h2>
        </div>

        <div class="stat-orange">
            <i class="fa-solid fa-scissors"></i>

            <p>Total Cukur</p>

            <h2>{{ $totalBooking }}</h2>
        </div>

    </div>

    <h3 class="section-title">AKUN SAYA</h3>

    <a href="{{ route('profile.edit') }}"
       class="profile-menu"
       style="text-decoration:none;color:inherit">

        <i class="fa-regular fa-user"></i>

        <b>Edit Profil</b>

        <span>›</span>

    </a>

    <a href="{{ route('password.change') }}"
   class="profile-menu"
   style="text-decoration:none;color:inherit">

    <i class="fa-solid fa-lock"></i>

    <b>Ubah Kata Sandi</b>

    <span>›</span>
    </a>

    <h3 class="section-title">AKTIVITAS</h3>

    
        <a href="{{ route('booking.history') }}"
        class="profile-menu"
        style="text-decoration:none;color:inherit">

        <i class="fa-solid fa-clock-rotate-left"></i>

        <b>Riwayat Booking</b>

        <span>›</span>

      </a>
    

    <a href="{{ route('loyalty') }}"
       class="profile-menu"
       style="text-decoration:none;color:inherit">
       <i class="fa-solid fa-gift"></i>

       <b>Hadiah & Loyalty</b>

        <span>›</span>

    </a>

    <h3 class="section-title">BANTUAN & LEGAL</h3>

    <div class="profile-menu">
        <i class="fa-regular fa-circle-question"></i>

        <b>Pusat Bantuan</b>

        <span>›</span>
    </div>

    <div class="profile-menu">
        <i class="fa-solid fa-shield-halved"></i>

        <b>Kebijakan Privasi</b>

        <span>›</span>
    </div>

    <div class="profile-menu">
        <i class="fa-solid fa-gavel"></i>

        <b>Syarat & Ketentuan</b>

        <span>›</span>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button class="logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            Keluar Sekarang
        </button>
    </form>

    <p class="version">
        BarberEase v2.4.1
    </p>

</div>

@include('partials.navbar', ['active' => 'profile'])

@endsection