<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/cars/{car}',[CarController::class,'show'])->name('cars.show');
Route::get('/cars',[CarController::class,'index'])->name('cars.index');
Route::get('/carsdel/{car}',[CarController::class,'destroy'])->name('cars.destroy');