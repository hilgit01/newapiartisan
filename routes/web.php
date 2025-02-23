<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomePage;
use App\Http\Controllers\PembelianController;

Route::view('/', 'welcome');

Route::view('dashboard','dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/beli', function () {
    return view('pembelian');
})->name('pembelian');

Route::resource("pembelian", PembelianController::class);

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');


require __DIR__.'/auth.php';
