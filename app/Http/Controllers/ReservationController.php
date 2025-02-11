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
        // Validasi data yang diterima
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'guest_count' => 'required|integer|min:1',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        // Memeriksa ketersediaan kamar
        $room = Room::find($request->room_id);
        $reservations = Reservation::where('room_id', $room->id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('check_in', [$request->check_in, $request->check_out])
                    ->orWhereBetween('check_out', [$request->check_in, $request->check_out]);
            })->exists();

        if ($reservations) {
            return redirect()->back()->withErrors(['room_id' => 'Kamar tidak tersedia pada tanggal yang dipilih.']);
        }

        // Menghitung total biaya
        $nights = (new \DateTime($request->check_out))->diff(new \DateTime($request->check_in))->days;
        $totalCost = $room->price_per_night * $nights;

        // Membuat reservasi
        Reservation::create([
            'room_id' => $room->id,
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest_count' => $request->guest_count,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_cost' => $totalCost,
            'status' => 'pending',
        ]);

        return redirect()->route('reservations.create')->with('success', 'Reservasi berhasil dibuat!');
    }
}
