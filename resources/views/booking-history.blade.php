@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('profile') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Riwayat Booking</h1>
</div>

<div class="content">

@if($bookings->count())

    @foreach($bookings as $booking)

    <div class="confirm-card">

        <h3>{{ $booking->nama_layanan }}</h3>

        <p>
            <b>Barber:</b>
            {{ $booking->barber }}
        </p>

        <p>
            <b>Tanggal:</b>
            {{ $booking->tanggal }}
        </p>

        <p>
            <b>Jam:</b>
            {{ $booking->jam }}
        </p>

        <p>
            <b>Harga:</b>
            Rp {{ number_format($booking->harga,0,',','.') }}
        </p>

        <p>
            <b>Status:</b>

            <span style="color:green">
                {{ $booking->status }}
            </span>
        </p>

    </div>

    <br>

    @endforeach

@else

<div class="confirm-card">

    <h3>Belum Ada Booking</h3>

    <p>
        Anda belum pernah melakukan booking.
    </p>

</div>

@endif

</div>

@endsection