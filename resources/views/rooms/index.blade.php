@extends('layout')

@section('content')
<h1>Daftar Kamar</h1>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<table>
    <thead>
        <tr>
            <th>Nomor Kamar</th>
            <th>Jenis Kamar</th>
            <th>Harga per Malam</th>
            <th>Fasilitas</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->price_per_night }}</td>
            <td>{{ $room->facilities }}</td>
            <td>{{ $room->status }}</td>
            <td>
                <a href="{{ route('rooms.edit', $room) }}">Edit</a>
                <form action="{{ route('rooms.destroy', $room) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
