<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AdminController::class,'index'])->name('login');
Route::post('login',[AdminController::class,'cekLogin']);

Route::middleware('auth:admin')->group(function () {
    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    
    // ------------Route Menu------------
    Route::get('menu',[MenuController::class,'index'])->name('menu');
    Route::post('menu',[MenuController::class,'create']);
    // ----------End Route Menu----------
});
Route::get('logout',[AdminController::class,'logout'])->name('logout');
Route::get('meja',function() {
    return view('Page.meja');
});