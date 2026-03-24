<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AuthController, RechargeController};

Route::get('/', function() { return redirect('/login'); });
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [RechargeController::class, 'index']);
});