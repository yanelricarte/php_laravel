<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio']);
Route::get('/contacto', [PageController::class, 'contacto']);
Route::get('/materias', [PageController::class, 'materias']);
