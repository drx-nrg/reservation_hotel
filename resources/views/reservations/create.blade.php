@extends('layout')

@section('content')
<h1>Reservasi Kamar</h1>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    <label>Kamar:</label>
    <select name="room_id" required>
        <option value="">Pilih Kamar</option>
        @foreach ($rooms as $room)
            <option value="{{ $room->id }}">{{ $room->room_number }} - {{ $room->room_type }} - Rp {{ number_format($room->price_per_night, 2) }}</option>
        @endforeach
    </select>

    <label>Nama:</label>
    <input type="text" name="customer_name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Nomor Telepon:</label>
    <input type="text" name="phone" required>

    <label>Jumlah Tamu:</label>
    <input type="number" name="guest_count" required min="1">

    <label>Tanggal Check-in:</label>
    <input type="date" name="check_in" required>

    <label>Tanggal Check-out:</label>
    <input type="date" name="check_out" required>

    <button type="submit">Buat Reservasi</button>
</form>
@endsection
