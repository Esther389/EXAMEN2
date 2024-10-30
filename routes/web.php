<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('plantas', PlantaController::class);
