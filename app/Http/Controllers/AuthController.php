<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10|unique:users,phone',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->phone . '@barberease.local',
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'phone' => 'Nomor HP atau password salah.',
            ])->withInput();
        }

        Auth::login($user);

        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}