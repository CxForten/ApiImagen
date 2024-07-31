<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/persona', [ImagenController::class, 'saveImage']);
