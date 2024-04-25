<?php

use App\Http\Controllers\ProcessorController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

Route::resource('processor', ProcessorController::class)->only('index','store', 'update', 'destroy', 'show');