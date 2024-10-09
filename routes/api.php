<?php

use App\Http\Controllers\MPESAC2BController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaSTKPUSHController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('v1/b2c/result', [MPESAB2CController::class, 'result'])->name('b2c.result');
Route::post('v1/b2c/timeout', [MPESAB2CController::class, 'timeout'])->name('b2c.timeout');
Route::post('validation', [MPESAC2BController::class, 'validation'])->name('c2b.validate');
Route::post('confirmation', [MPESAC2BController::class, 'confirmation'])->name('c2b.confirm');

// Mpesa STK Push Callback Route
Route::post('v1/confirm', [MpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirm');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});