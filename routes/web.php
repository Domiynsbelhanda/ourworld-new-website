<?php

use App\Http\Controllers\Pages\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('contact', [HomePageController::class, 'contact'])->name('contact');
Route::get('services', [HomePageController::class, 'services'])->name('services');
Route::get('services/lives', [HomePageController::class, 'lives'])->name('services.lives');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
