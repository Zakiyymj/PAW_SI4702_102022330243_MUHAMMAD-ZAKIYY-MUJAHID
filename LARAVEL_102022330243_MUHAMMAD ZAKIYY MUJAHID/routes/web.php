<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

Route::get('/cars', [   CarsController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
