<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{operation1}/{val1}/{val2}/{operation2}/{val3}/{val4}', [CalculatorController::class, 'compute']);


