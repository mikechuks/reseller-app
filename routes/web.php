<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/settings', [SettingsController::class, 'index']);
Route::resource('users', UserController::class);