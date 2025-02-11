@extends('layout')

@section('content')
<h1>Tambah Kamar</h1>
<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <label>Nomor Kamar:</label>
    <input type="text" name="room_number" required>
    <label>Jenis Kamar:</label>
    <input type="text" name="room_type" required>
    <label>Harga per Malam:</label>
    <input type="number" name="price_per_night" step="0.01" required>
    <label>Fasilitas:</label>
    <textarea name="facilities" required></textarea>
    <label>Status:</label>
    <select name="status" required>
        <option value="available">Tersedia</option>
        <option value="occupied">Terisi</option>
    </select>
    <button type="submit">Simpan</button>
</form>
@endsection
