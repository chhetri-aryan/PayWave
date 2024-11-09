<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAdminSession;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaymentController;

//route group for middleware
Route::middleware([CheckAdminSession::class])->group(function () {
    Route::resource('employees', EmployeeController::class);

    Route::resource('payments', PaymentController::class);
    
    Route::get('/', function () {
        return view('dashboard');
    })-> name('dashboard');

    Route::get('/analytics', [EmployeeController::class, 'getGenderRatio'])->name('analytics');

});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

