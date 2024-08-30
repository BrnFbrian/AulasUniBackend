<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/cadastrar', [UserController::class, 'store']);

Route::prefix('/user')->group(function (){
    Route::get('/', [UserController::class, 'index']);
});

Route::prefix('/user')->group(function (){
    Route::put('/{id}', [UserController::class, 'update']);
});

Route::prefix('/user')->group(function (){
    Route::delete('/{id}', [UserController::class, 'destroy']);
});