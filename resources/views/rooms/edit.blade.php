@extends('layout')

@section('content')
<h1>Edit Kamar</h1>
<form action="{{ route('rooms.update', $room) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nomor Kamar:</label>
    <input type="text" name="room_number" value="{{ $room->room_number }}" readonly>
    <label>Jenis Kamar:</label>
    <input type="text" name="room_type" value="{{ $room->room_type }}" required>
    <label>Harga per Malam:</label>
    <input type="number" name="price_per_night" value="{{ $room->price_per_night }}" step="0.01" required>
    <label>Fasilitas:</label>
    <textarea name="facilities" required>{{ $room->facilities }}</textarea>
    <label>Status:</label>
    <select name="status" required>
        <option value="available" {{ $room->status == 'available' ? 'selected' : '' }}>Tersedia</option>
        <option value="occupied" {{ $room->status == 'occupied' ? 'selected' : '' }}>Terisi</option>
    </select>
    <button type="submit">Update</button>
</form>
@endsection
