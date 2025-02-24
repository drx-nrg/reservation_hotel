<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AdminMiddleware;

Route::redirect('/admin', '/admin/dashboard', 301);

Route::get('/admin/dashboard', function(){
    return view('pages.admin.dashboard.index');
});
Route::get('/admin/dashboard/reservations/create', function(){
    return view('pages.admin.reservations.create');
});
Route::get('/admin/dashboard/reservations', function(){
    return view('pages.admin.reservations.index');
});
Route::get('/', function () {
    return view('pages.front.home');
});
Route::get('/explore', function () {
    return view('pages.front.explore');
});
Route::get('/about-us', function () {
    return view('pages.front.about-us');
});
Route::resource('/admin/dashboard/rooms', RoomController::class)->middleware(AdminMiddleware::class);
Route::resource('reservations', ReservationController::class);
Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');
Route::get('admin/reservations', [ReservationController::class, 'adminIndex'])->name('admin.reservations.index');
Route::post('admin/reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('admin.reservations.confirm');
Route::post('admin/reservations/{id}/cancel', [ReservationController::class, 'cancel'])->name('admin.reservations.cancel');
Route::get('signin', function () {
    return view('pages.auth.login');
});
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('signup', function () {
    return view('pages.auth.register');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
