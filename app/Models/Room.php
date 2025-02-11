<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number', 'room_type', 'price_per_night', 'facilities', 'status'
    ];

    // Relasi satu ke banyak dengan Reservation
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
