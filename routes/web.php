<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

Route::get('/', fn () => redirect('/login'));

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/booking/service', [BookingController::class, 'service'])->name('booking.service');
Route::post('/booking/service/save', [BookingController::class, 'saveService'])->name('booking.save.service');

Route::get('/booking/time', [BookingController::class, 'time'])->name('booking.time');
Route::post('/booking/time/save', [BookingController::class, 'saveTime'])->name('booking.save.time');

Route::get('/booking/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');
Route::post('/booking/pay', [BookingController::class, 'pay'])->name('booking.pay');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');