<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AdminController::class,'index'])->name('login');
Route::post('login',[AdminController::class,'cekLogin']);

Route::middleware('auth:admin')->group(function () {
    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
});
Route::get('logout',[AdminController::class,'logout'])->name('logout');
