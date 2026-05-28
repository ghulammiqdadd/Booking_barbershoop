<div class="navbar">
    <a href="{{ route('home') }}" class="{{ $active == 'home' ? 'active' : '' }}">
        <i class="fa-solid fa-house"></i>
        Home
    </a>

    <a href="{{ route('booking.service') }}" class="{{ $active == 'booking' ? 'active' : '' }}">
        <i class="fa-regular fa-calendar-days"></i>
        Bookings
    </a>

     <a href="{{ route('profile') }}" class="{{ $active == 'profile' ? 'active' : '' }}">
        <i class="fa-regular fa-user"></i>
        Profile
    </a>
</div>