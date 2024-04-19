<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


# --------------------------Routing Fungsi Upload----------------------------------

Route::get('/Events/new', function () {
    return view('UploadEvent');
});

Route::get('/Events/{idEvent}/edit', EventsController::class .'@showupdate')->name('event.showupdate');

Route::get('Events', function () {
    return (new EventsController)->index();
});

Route::post('/Events/tambah', EventsController::class .'@store')->name('event.store');

Route::post('/Events/{idEvent}/update', EventsController::class .'@update')->name('event.update');

Route::post('/Events/{idEvent}/delete', EventsController::class .'@destroy')->name('event.destroy');

Route::get('search', [EventsController::class, 'search'])->name('event.search');

Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/Login', RegistrasiController::class .'@authenticate')->name('users.authenticate');

Route::get('/Registrasi', [RegistrasiController::class, 'index'])->middleware('guest');

Route::post('/Registrasi', RegistrasiController::class .'@store')->name('users.store');

# --------------------------------------Routing Full-------------------------------------------



Route::get('/', function () {
    return view('Registrasi');
});

Route::get('Login', function () {
    return view('Login');
});

Route::post('Login', function () {
    return view('Login');
});
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('kalender', function () {
    return view('kalender');
});

Route::get('pembayaran', function () {
    return view('pembayaran');
});

Route::get('Event', function () {
    return view('Event');
});

Route::get('eventregist', function () {
    return view('eventregist');
});

Route::post('pembayaran', function () {
    return view('pembayaran');
});


Route::get('Search', function () {
    return view('Search');
});

Route::get('Profile', function () {
    return view('Profile');
});

Route::get('Review', function () {
    return view('Review');
});

Route::get('history', function () {
    return view('histori');
});

Route::get('detailEvent', function () {
    return view('detailEvent');
});

Route::get('alamat', function () {
    return view('Alamat');
});

# --------------------------------------Done Version 1.0.0-------------------------------------------