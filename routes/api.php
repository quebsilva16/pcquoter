<?php

use App\Http\Controllers\ProcessorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('processor', ProcessorController::class)->only('index','store', 'update', 'destroy', 'show');