<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'room_id', 'check_in', 'check_out', 'total_guests', 'total_price', 'status'
    ];

    // Relasi ke Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
