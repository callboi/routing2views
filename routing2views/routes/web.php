<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route for the home page
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Route for /greet that uses GreetController
Route::get('/greet', [GreetController::class, 'show']);
