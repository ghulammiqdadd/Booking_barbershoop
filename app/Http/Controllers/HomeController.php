<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'photo.uploaded' => 'Foto gagal diupload. Ukuran foto maksimal 2MB.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.mimes' => 'Foto harus berformat jpg, jpeg, png, atau webp.',
            'photo.max' => 'Ukuran foto maksimal 2MB.',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            $namaFile = time() . '_' . $file->getClientOriginalName();
            $tujuanUpload = public_path('profile_photos');

            if (! file_exists($tujuanUpload)) {
                mkdir($tujuanUpload, 0755, true);
            }

            if ($user->photo && file_exists(public_path($user->photo))) {
                unlink(public_path($user->photo));
            }

            $file->move($tujuanUpload, $namaFile);

            $user->photo = 'profile_photos/' . $namaFile;
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('profile');
    }


    public function changePassword()
  {
    return view('change-password');
  }

  public function updatePassword(Request $request)
  {
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    $user = auth()->user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors([
            'current_password' => 'Password lama salah'
        ]);
    }

    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()
        ->route('profile')
        ->with('success', 'Password berhasil diubah');
    }

    public function loyalty()
   {
    $user = auth()->user();

    return view('loyalty', compact('user'));
   }


}
