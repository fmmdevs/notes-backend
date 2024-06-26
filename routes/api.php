<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

Route::middleware('auth:sanctum')->get('/note', [NoteController::class, 'index']);
Route::middleware('auth:sanctum')->post('/note', [NoteController::class, 'store']);

// Añadiendo delete
Route::middleware('auth:sanctum')->delete('/delete/{id}', [NoteController::class, 'destroy']);

// Añadiendo update
Route::middleware('auth:sanctum')->put('/update/{id}', [NoteController::class, 'update']);
