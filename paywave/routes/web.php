<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emp', function() {
    return view("displayEmployees");
});

// Route::get("/user", [UserController::class, 'index']);
