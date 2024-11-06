<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAdminSession;


Route::get('/', function () {
    return view('dashboard');
}) -> middleware(CheckAdminSession::class) -> name('dashboard');



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/emp', function() {
    return view("displayEmployees");
});

// Route::get("/user", [UserController::class, 'index']);
