<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function service()
    {
        return view('booking.service');
    }

    public function saveService(Request $request)
    {
        session([
            'service_name' => $request->service_name,
            'duration' => $request->duration,
            'price' => $request->price,
        ]);

        return redirect()->route('booking.time');
    }

    public function time()
    {
        return view('booking.time');
    }

    public function saveTime(Request $request)
    {
        session([
            'barber' => $request->barber,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('booking.confirm');
    }

    public function confirm()
    {
        return view('booking.confirm');
    }

    public function pay()
    {
        $price = (int) session('price', 0);

        Booking::create([
            'user_id' => auth()->id(),
            'nama_layanan' => session('service_name'),
            'barber' => session('barber'),
            'tanggal' => session('date'),
            'jam' => session('time'),
            'durasi' => session('duration'),
            'harga' => $price,
            'status' => 'paid',
        ]);

        $user = auth()->user();
        $user->loyalty_points += (int) floor($price / 1000);
        $user->save();

        session()->forget([
            'service_name',
            'duration',
            'price',
            'barber',
            'date',
            'time',
        ]);

        return redirect('/home')
            ->with('success', 'Booking berhasil dibayar');
    }

    public function history()
  {
    $bookings = Booking::where('user_id', auth()->id())
        ->latest()
        ->get();

    return view('booking-history', compact('bookings'));
  }
}
