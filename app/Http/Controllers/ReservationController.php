<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('room')->get();
        return view('reservations.index', compact('reservations'));
    }
    public function create()
    {
        // Mengambil semua kamar yang tersedia
        $rooms = Room::where('status', 'available')->get();
        return view('reservations.create', compact('rooms'));
    }

    public function adminIndex()
    {
        // Mengambil semua reservasi untuk admin
        $reservations = Reservation::with('room')->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function cancel($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = 'canceled';
        $reservation->save();

        return redirect()->route('admin.reservations.index')->with('success', 'Reservasi dibatalkan!');
    }

    public function store(Request $request)
    {
        //
    }
}
