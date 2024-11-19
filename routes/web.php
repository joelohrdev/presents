<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('kids', \App\Livewire\Kid\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('kids.index');

Route::get('kids/{kid}', \App\Livewire\Kid\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('kids.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
