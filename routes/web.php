<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
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

Route::get('/ZaedarAlba', function () {
    return view('home');
});
Route::get('/TentangSaya', function () {
    return view('tentang');
});
Route::get('/PortoSaya', function () {
    return view('porto');
});
Route::get('/Kontak', function () {
    return view('kontak');
});
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
