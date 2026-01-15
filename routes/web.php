<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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
    Route::group(["prefix" => 'dashboard'], function() {
        Route::get('/profile' , function() {
            if(Auth::check()) {
                $user = Auth::user();
                return view('dashboard.profile' , ['title' => 'Digital Kas | Profile' , 'data' => $user]);
            } else {
                return redirect('/auth/login' , 403)->with("error" , "Ups, kamu tidak memiliki akses.Silahkan login terlebih dahulu!");
            }
        })->name('dashboard.profile');
        Route::post('/profile', [DashboardController::class, 'editProfile']);
        Route::get('/anggota-kelas' , function() {
            if(Auth::check()) {
                $user = Auth::user();
                return view('dashboard.profile' , ['title' => 'Digital Kas | Profile' , 'data' => $user]);
            } else {
                return redirect('/auth/login' , 403)->with("error" , "Ups, kamu tidak memiliki akses.Silahkan login terlebih dahulu!");
            }
            // return view('dashboard.profile' , ['title' => 'Digital Kas | Profile']);
        })->name('dashboard.anggota_kelas');
        Route::get('/kelola-kas' , function() {
            return view('dashboard.profile' , ['title' => 'Digital Kas | Profile']);
        })->name('dashboard.kelola_kas');
    });
    Route::get('/auth/logout', [AuthController::class , 'logout'])->name('logout');
});

Route::post('/auth/register', [AuthController::class, 'postRegister']);
Route::post('/auth/login', [AuthController::class, 'postLogin']);
Route::post('/auth/reset-password', [AuthController::class, 'resetPassword']);
