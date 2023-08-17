<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DataPenggunaContoller;
use App\Http\Controllers\DataPesanController;
use App\Http\Controllers\KonfimasiPemesanan;
use App\Http\Controllers\PesanController;

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

Route::get('/', function () {
    return view('home', [
        // 'tittle' => 'Home',

    ]);
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about',  [
        "tittle" => "about",
        // "active" => "about",
        "name" => "Alfaidar",
        "email" => "alfaidaramirjr@gmail.com",
        // "img" => "bg.jpg"

    ]);
});
Route::get('Admin', function () {
    return view('dashboardAdmin.index', [
        "tittle" => 'Admin'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'Logika']);

Route::post('/logout', [LogoutController::class, 'Logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'tittle' => 'dashboard'
    ]);
})->middleware('auth');


Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/pesan', function () {
    return view('pesan');
});

Route::resource('/kamar', DataKamarController::class)->middleware('auth');

Route::resource('/pengguna', DataPenggunaContoller::class)->middleware('auth');

Route::resource('/pribadi', PesanController::class)->middleware('auth');
Route::resource('/konfimasipemesanan', KonfimasiPemesanan::class)->middleware('auth');

Route::resource('/datapesan', DataPesanController::class)->middleware('auth');
