<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RechargeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->group(function () {
    Route::post('/recharge', [RechargeController::class, 'processRecharge']);
    Route::post('/create-order', [RechargeController::class, 'createOrder']);
    Route::post('/verify-payment', [RechargeController::class, 'verifyPayment']);
});
