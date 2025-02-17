<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('pages.admin.rooms.index', compact('rooms'));
    }

    public function create() {
        return view('pages.admin.rooms.create');
    }

    public function store(Request $request) {
        $request->validate([
            'room_number' => 'required|unique:rooms|max:10',
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'facilities' => 'required',
            'status' => 'required'    
        ]);
        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');

    }

    public function edit(Room $room) {
        return view('pages.admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room) {
        $request->validate([
            'room_number' => 'required|max:10|unique:rooms,room_number,' . $room->id,
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'facilities' => 'required',
            'status' => 'required'
        ]);

        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room) {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
