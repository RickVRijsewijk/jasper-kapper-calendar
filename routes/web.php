<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfspraakController;

Route::view('/', 'welcome')->name('home');
Route::view('afspraak/maken', 'afspraak.maken')->name('afspraak.maken');

Route::post('afspraak', [AfspraakController::class, 'store'])->name('afspraak.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('afspraken', [AfspraakController::class, 'index'])->name('afspraken.index');
    Route::get('afspraken/events', [AfspraakController::class, 'events'])->name('afspraken.events');
});

require __DIR__.'/settings.php';
