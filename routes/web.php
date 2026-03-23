<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AuthController, RechargeController};

Route::get('/', function() { return redirect('/login'); });
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [RechargeController::class, 'index']);
    Route::post('/api/recharge', [RechargeController::class, 'processRecharge']);
    Route::post('/api/create-order', [RechargeController::class, 'createOrder']);
    Route::post('/api/verify-payment', [RechargeController::class, 'verifyPayment']);
});