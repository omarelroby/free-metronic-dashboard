<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceSettingController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::resource('items', ItemController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('users', UserController::class);

// Price Settings (edit only)
Route::get('/price-settings/edit', [PriceSettingController::class, 'edit'])->name('price-settings.edit');
Route::put('/price-settings', [PriceSettingController::class, 'update'])->name('price-settings.update');
