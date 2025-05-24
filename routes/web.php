<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/proyectos', [GeneralController::class, 'proyectos']);
Route::get('/contacto', [GeneralController::class, 'contacto']);
Route::get('/sobre-mi', [GeneralController::class, 'sobreMi']);
