<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', function () {
    return view('auth.register', ["title" => "Digital Kas | Register"]);
})->name('register');

Route::get('/auth/login', function () {
    return view('auth.login', ["title" => "Digital Kas | Login"]);
})->name('login');

Route::get('/auth/reset-password', function () {
    return view('auth.reset_password', ["title" => "Digital Kas | Reset Password"]);
})->name('reset-password');

Route::middleware('auth:kelas')->group(function () {
    Route::get('/dashboard' , function() {
        return view('dashboard' , ['title' => 'Digital Kas | Dashboard']);
    })->name('dashboard');
});

Route::post('/auth/register', [AuthController::class, 'postRegister']);
Route::post('/auth/login', [AuthController::class, 'postLogin']);
