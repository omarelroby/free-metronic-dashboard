<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::resource('items', ItemController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('users', UserController::class);
