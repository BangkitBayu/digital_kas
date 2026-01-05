<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', function () {
    return view('auth.register', ["title" => "Digital Kas | Register"]);
});

Route::get('/auth/login' , function () {
    return view('auth.login' , ["title" => "Digital Kas | Login"]);
});

Route::get('/auth/reset-password', function() {
    return view('auth.reset_password' , ["title" => "Digital Kas | Reset Password"]);
});

Route::post('/auth/register', [AuthController::class, 'postRegister']);
Route::post('/auth/login', [AuthController::class, 'postLogin']);
