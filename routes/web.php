<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/login', function () {
//     return view('frontend.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('frontend.register');
// })->name('register');

Auth::routes([
    'verify' => true
]);


Route::get('/otp-login', [LoginController::class, 'otpLogin'])->name('otp.login');
Route::post('/otp-login-send-msg', [LoginController::class, 'otpLoginSendMsg'])->name('otp.login.send.msg');

Route::get('/otp-verify', [LoginController::class, 'otpVerify'])->name('otp.verify');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
