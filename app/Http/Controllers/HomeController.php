<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user = auth()->user();

        $totalBooking = Booking::where('user_id', $user->id)->count();

        $totalTransaksi = Booking::where('user_id', $user->id)
            ->where('status', 'paid')
            ->sum('harga');

        return view('profile', compact(
            'user',
            'totalBooking',
            'totalTransaksi'
        ));
    }
}