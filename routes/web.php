<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\NarudzbinaController;
use App\Http\Controllers\Admin\VinoController as AdminVinoController;
use App\Http\Controllers\Admin\DashboardController;

// Javne rute
Route::get('/', [VinoController::class, 'index'])->name('home');

Route::get('/vino/{id}', [VinoController::class, 'show'])->name('vino.show');
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/onama', function () {
    return view('onama');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
// Dashboard za korisnike
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Naručivanje
Route::post('/naruci-vino/{vino}', [NarudzbinaController::class, 'store'])
    ->middleware('auth')
    ->name('narudzbina.store');

// Korisničke rute (auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/moje-narudzbine', [ProfileController::class, 'narudzbine'])->name('korisnik.narudzbine');
});

// Admin panel
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('vina', AdminVinoController::class)->parameters([
    'vina' => 'vino'
]); // OVO DODATO - CRUD za vina
});

// Staticka stranica


// Auth (Breeze)
require __DIR__.'/auth.php';

