@extends('layouts.app')

@section('content')
<div class="header">
    <a href="{{ route('booking.service') }}" class="back"><i class="fa-solid fa-arrow-left"></i></a>
    <h1>Book Appointment</h1>
</div>

<div class="content">
    <p style="font-size:18px">
        Step 2 of 3
        <span style="float:right;color:#0051d8">Schedule & Barber</span>
    </p>

    <div style="height:8px;background:#e2e9fa;border-radius:10px;margin-bottom:35px">
        <div style="width:70%;height:8px;background:#0755d8;border-radius:10px"></div>
    </div>

    <h1 style="font-size:30px;font-weight:400">Pilih Barber & Waktu</h1>

    <form action="{{ route('booking.save.time') }}" method="POST">
        @csrf

       <label class="label">Pilih Barber</label>

     <input type="hidden" name="barber" id="barberInput" required value="Aris Pratama">

     <div class="barber-grid">
        <div class="barber-card selected barber-option" data-barber="Aris Pratama">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500">
        <h3>Aris Pratama</h3>
        <p>Senior Barber</p>
     </div>

     <div class="barber-card barber-option" data-barber="Santi Wijaya">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500">
        <h3>Santi Wijaya</h3>
        <p>Style Specialist</p>
     </div>
</div>

        <label class="label">Pilih Tanggal</label>
        <input type="date" name="date" class="input-wrap" required style="width:100%;font-size:18px">

        <label class="label">Pilih Jam</label>
        <select name="time" class="input-wrap" required style="width:100%;font-size:18px">
            <option value="">-- Pilih Jam --</option>
            <option value="09:00">09:00 WIB</option>
            <option value="09:30">09:30 WIB</option>
            <option value="10:00">10:00 WIB</option>
            <option value="10:30">10:30 WIB</option>
            <option value="13:00">13:00 WIB</option>
            <option value="14:00">14:00 WIB</option>
            <option value="15:30">15:30 WIB</option>
        </select>

        <button type="submit" class="btn-primary">
            Continue to Payment <i class="fa-solid fa-arrow-right"></i>
        </button>
    </form>
</div>

@include('partials.navbar', ['active' => 'booking'])

<script>
    const barberOptions = document.querySelectorAll('.barber-option');
    const barberInput = document.getElementById('barberInput');

    barberOptions.forEach(option => {
        option.addEventListener('click', function () {
            barberOptions.forEach(item => item.classList.remove('selected'));

            this.classList.add('selected');

            barberInput.value = this.dataset.barber;
        });
    });
</script>
@endsection