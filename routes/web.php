<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function() {
    Route::middleware('guest')->group(function(){
        
        Route::get('login', function(){
            return view('admin.login.form');
        })->name('login');
        
        Route::get('register', function(){
            return "Register admin";
        })->name('register');
    
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard', function(){
            return "Dashboard admin";
        });
    });
});