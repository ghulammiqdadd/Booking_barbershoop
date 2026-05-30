@extends('layouts.app')

@section('content')

<div class="header">
    <a href="{{ route('profile') }}" class="back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <h1>Edit Profil</h1>
</div>

<div class="content">

    <form action="{{ route('profile.update') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div style="text-align:center;margin-bottom:30px">

            @if($user->photo)
                <img
                    src="{{ asset($user->photo) }}"
                    style="
                        width:120px;
                        height:120px;
                        border-radius:50%;
                        object-fit:cover;
                    ">
            @else
                <img
                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300"
                    style="
                        width:120px;
                        height:120px;
                        border-radius:50%;
                        object-fit:cover;
                    ">
            @endif

            <br><br>

            <input type="file" name="photo" accept="image/jpeg,image/png,image/webp">

            @error('photo')
                <p style="color:red;margin-top:8px">{{ $message }}</p>
            @enderror
        </div>

        <label>Nama</label>

        <input
            type="text"
            name="name"
            value="{{ $user->name }}"
            class="input-wrap"
            style="width:100%"
        >

        <br><br>

        <label>Nomor HP</label>

        <input
            type="text"
            name="phone"
            value="{{ $user->phone }}"
            class="input-wrap"
            style="width:100%"
        >

        <br><br>

        <button
            type="submit"
            class="btn-primary">
            Simpan Perubahan
        </button>

    </form>

</div>

@endsection
