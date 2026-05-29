<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function editProfile()
    {
        $user = auth()->user();

        return view('profile-edit', compact('user'));
    }

 public function updateProfile(Request $request)
 {
    $user = auth()->user();

    $request->validate([
        'name' => 'required|min:3',
        'phone' => 'required|min:10|unique:users,phone,' . $user->id,
        'photo' => 'nullable|file|max:10240',
    ]);

    if ($request->file('photo')) {
        $file = $request->file('photo');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path('profile_photos'), $namaFile);

        $user->photo = 'profile_photos/' . $namaFile;
    }

    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->save();

    return redirect()->route('profile');
 }


}