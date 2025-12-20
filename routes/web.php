<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', function () {
    return view('auth.register', ["title" => "Digital Kas | Register"]);
});

Route::post('/auth/register', [AuthController::class, 'postRegister']);

Route::get('/auth/login' , function () {
    return view('auth.login' , ["title" => "Digital Kas | Login"]);
});
