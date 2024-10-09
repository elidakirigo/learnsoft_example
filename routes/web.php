<?php

use App\Http\Controllers\MPESAB2CController;
use App\Http\Controllers\MPESAC2BController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaSTKPUSHController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/v1/b2c/simulate', [MPESAB2CController::class, 'simulate']);

Route::post('register-urls', [MPESAC2BController::class, 'registerURLS']);

Route::post('/v1/mpesatest/stk/push', [MpesaSTKPUSHController::class, 'STKPush']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/employees', App\Http\Controllers\Admin\EmployeeController::class)
    ->names([
        'index' => 'admin.employees.index',
        'store' => 'admin.employees.store',
        'show' => 'admin.employees.show',
        'update' => 'admin.employees.update',
        'destroy' => 'admin.employees.destroy',
        'create' => 'admin.employees.create',
        'edit' => 'admin.employees.edit'
    ]);