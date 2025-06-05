<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeripheriqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PeripheriqueController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/peripherique', [PeripheriqueController::class, 'create'])->middleware(['auth', 'verified'])->name('peripherique');
Route::post('/peripherique', [PeripheriqueController::class, 'store'])->middleware(['auth', 'verified'])->name('peripherique.store');
Route::get('/peripherique/edit/{id}', [PeripheriqueController::class, 'edit'])->middleware(['auth', 'verified'])->name('peripherique.edit');
Route::get('/peripherique/{id}',[PeripheriqueController::class , 'show'])->middleware(['auth', 'verified'])->name('peripherique.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
