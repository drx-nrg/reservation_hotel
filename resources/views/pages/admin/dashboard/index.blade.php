@extends('components.layouts.admin-layout')

@section('title', 'Dashboard')

@section('main')
    <div class="container min-w-full min-h-screen flex justify-center">
        <div class="max-w-screen-xl w-full px-10 pt-20 pb-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex-1 w-full rounded-md bg-white shadow-sm flex flex-row gap-5 items-center px-5 py-10">
                    <div class="w-[50px] h-[50px] flex items-center justify-center bg-blue-200 rounded-full">
                        <i class="fa-solid fa-bed text-xl text-blue-500"></i>
                    </div>
                    <div class="detail-card flex flex-col items-start">
                        <h1 class="font-semibold !font-['Poppins'] text-2xl">23</h1>
                        <p class="text-slate-600 !font-['Poppins']">Total Kamar</p>
                    </div>
                </div>
                <div class="flex-1 w-full rounded-md bg-white shadow-sm flex flex-row gap-5 items-center px-5 py-10">
                    <div class="w-[50px] h-[50px] flex items-center justify-center bg-red-200 rounded-full">
                        <i class="fa-solid fa-user text-xl text-red-500"></i>
                    </div>
                    <div class="detail-card flex flex-col items-start">
                        <h1 class="font-semibold !font-['Poppins'] text-2xl">69</h1>
                        <p class="text-slate-600 !font-['Poppins']">Total Pengguna</p>
                    </div>
                </div>
                <div class="flex-1 w-full rounded-md bg-white shadow-sm flex flex-row gap-5 items-center px-5 py-10">
                    <div class="w-[50px] h-[50px] flex items-center justify-center bg-yellow-200 rounded-full">
                        <i class="fa-solid fa-building text-xl text-yellow-600"></i>
                    </div>
                    <div class="detail-card flex flex-col items-start">
                        <h1 class="font-semibold !font-['Poppins'] text-2xl">11</h1>
                        <p class="text-slate-600 !font-['Poppins']">Total Reservasi Aktif</p>
                    </div>
                </div>
                <div class="flex-1 w-full rounded-md bg-white shadow-sm flex flex-row gap-5 items-center px-5 py-10">
                    <div class="w-[50px] h-[50px] flex items-center justify-center bg-green-200 rounded-full">
                        <i class="fa-solid fa-circle-dollar-to-slot text-xl text-green-600"></i>
                    </div>
                    <div class="detail-card flex flex-col items-start">
                        <h1 class="font-semibold !font-['Poppins'] text-2xl">Rp. 6,789,000</h1>
                        <p class="text-slate-600 !font-['Poppins']">Pendapatan / Bulan</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 w-full grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="min-w-full bg-white rounded-md shadow-sm p-5">
                    <canvas id="barChart" style="height: 300px;"></canvas>
                </div>
                <div class="min-w-full bg-white rounded-md shadow-sm p-5">
                    <h1 class="font-semibold text-xl">Kamar Terpopuler</h1>
                    <p class="text-slate-600">Kamar dengan jumlah reservasi terbanyak</p>
                    <div type="circle" class="mt-3 w-full flex flex-col">
                        <div class="w-full flex flex-row gap-3 items-center pt-3 pb-3 border-b border-gray-300">
                            <div class="number w-[40px] h-[40px] rounded-md bg-blue-600 text-white grid place-items-center">
                                1
                            </div>
                            <div class="detail flex-1">
                                <h1 class="font-semibold text-lg">Kamar 001</h1>
                                <p class="text-slate-600 text-sm">Televisi,AC,Toilet,Ruang Keluarga</p>
                            </div>
                            <div class="reservasi flex items-center">
                                <p><span class="font-semibold">98</span> Reservasi</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row gap-3 items-center pt-3 pb-3 border-b border-gray-300">
                            <div class="number w-[40px] h-[40px] rounded-md bg-blue-600 text-white grid place-items-center">
                                2
                            </div>
                            <div class="detail">
                                <h1 class="font-semibold text-lg">Kamar 002</h1>
                                <p class="text-slate-600 text-sm">Televisi,AC,Toilet,Ruang Keluarga</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row gap-3 items-center pt-3 pb-3 border-b border-gray-300">
                            <div class="number w-[40px] h-[40px] rounded-md bg-blue-600 text-white grid place-items-center">
                                3
                            </div>
                            <div class="detail">
                                <h1 class="font-semibold text-lg">Kamar 002</h1>
                                <p class="text-slate-600 text-sm">Televisi,AC,Toilet,Ruang Keluarga</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row gap-3 items-center pt-3 pb-3 border-b border-gray-300">
                            <div class="number w-[40px] h-[40px] rounded-md bg-blue-600 text-white grid place-items-center">
                                4
                            </div>
                            <div class="detail">
                                <h1 class="font-semibold text-lg">Kamar 002</h1>
                                <p class="text-slate-600 text-sm">Televisi,AC,Toilet,Ruang Keluarga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('barChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        '17 Feb',
                        '18 Feb',
                        '19 Feb',
                        '20 Feb',
                        '21 Feb',
                        '22 Feb',
                        '23 Feb',
                    ], // Mengambil tanggal
                    datasets: [{
                        label: 'Pendapatan (Rp)',
                        data: [
                            120000,
                            110000,
                            130000,
                            120000,
                            100000,
                            90000,
                            95000,
                        ], // Mengambil nilai pendapatan
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 205, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(201, 203, 207, 1)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    height: 300
                    // barThickness: 40
                }
            });
        });
    </script>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush
