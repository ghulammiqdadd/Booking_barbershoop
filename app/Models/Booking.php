<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'nama_layanan',
        'barber',
        'tanggal',
        'jam',
        'durasi',
        'harga',
        'status',
    ];
}