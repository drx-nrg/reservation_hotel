<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('layout');
});
Route::resource('rooms', RoomController::class);
Route::resource('reservations', ReservationController::class);
Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');
Route::get('admin/reservations', [ReservationController::class, 'adminIndex'])->name('admin.reservations.index');
Route::post('admin/reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('admin.reservations.confirm');
Route::post('admin/reservations/{id}/cancel', [ReservationController::class, 'cancel'])->name('admin.reservations.cancel');
