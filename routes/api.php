<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistableController;

Route::post('/task',[TodolistableController::class, "create"] );
Route::get('/tasks', [TodolistableController::class, 'read']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
