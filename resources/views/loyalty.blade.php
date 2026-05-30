@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('profile') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Hadiah & Loyalty</h1>
</div>

<div class="content">

<div class="payment-box">

    <h3>Total Poin Anda</h3>

    <h1>
        {{ $user->loyalty_points }}
    </h1>

</div>

<br>

<div class="confirm-card">
    <h3>🎁 100 Poin</h3>
    <p>Diskon 10%</p>
</div>

<br>

<div class="confirm-card">
    <h3>🎁 200 Poin</h3>
    <p>Gratis Hair Wash</p>
</div>

<br>

<div class="confirm-card">
    <h3>🎁 300 Poin</h3>
    <p>Gratis Beard Grooming</p>
</div>

<br>

<div class="confirm-card">
    <h3>🎁 500 Poin</h3>
    <p>Gratis Haircut</p>
</div>

</div>

@endsection