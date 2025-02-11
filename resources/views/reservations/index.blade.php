@extends('layout')

@section('content')
<h1>Daftar Reservasi</h1>
<table>
    <thead>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Jumlah Tamu</th>
            <th>Kamar</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>Total Biaya</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->customer_name }}</td>
            <td>{{ $reservation->email }}</td>
            <td>{{ $reservation->phone }}</td>
            <td>{{ $reservation->guest_count }}</td>
            <td>{{ $reservation->room->room_number }} - {{ $reservation->room->room_type }}</td>
            <td>{{ $reservation->check_in }}</td>
            <td>{{ $reservation->check_out }}</td>
            <td>Rp {{ number_format($reservation->total_cost, 2) }}</td>
            <td>{{ ucfirst($reservation->status) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
<td>
    {{ ucfirst($reservation->status) }}
    @if($reservation->status == 'pending')
        <form action="{{ route('reservations.confirm', $reservation->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Konfirmasi</button>
        </form>
    @endif
</td>
