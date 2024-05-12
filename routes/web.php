<?php

use Illuminate\Support\Facades\Route;
use Filament\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk langsung menuju ke halaman login Filament
// Route::get('/', [LoginController::class, 'create'])->name('filament.login');

