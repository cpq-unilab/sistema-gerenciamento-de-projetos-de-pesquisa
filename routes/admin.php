<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DataFromSigaa;
use App\Http\Controllers\Admin\NoticesController;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'check'])->name('check');
    Route::get('remember', [AuthController::class, 'rememberForm'])->name('remember.form');
    Route::post('remember', [AuthController::class, 'remember'])->name('remember');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('notices', NoticesController::class);

    Route::get('data-from-sigaa', [DataFromSigaa::class, 'allNotices'])->name('data-from-sigaa');
});
