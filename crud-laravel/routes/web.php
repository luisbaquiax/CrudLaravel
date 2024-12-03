<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EstudianteController;

Route::get('/', [EstudianteController::class, 'list'])->name('list');
Route::post('/addEstudiante', [EstudianteController::class, 'create'])->name('addEstudiante');
Route::get('/eliminarEstudiante/{id}', [EstudianteController::class, 'delete'])->name('eliminarEstudiante');
Route::post('/editEstudiante/{id}', [EstudianteController::class, 'update'])->name('editEstudiante');
