<?php

use App\Http\Controllers\Auth\JWTAuthController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);
Route::middleware([JwtMiddleware::class])->group(function () {
    Route::resource('tasks', TaskController::class);
});
