<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 */
Route::post('/login',[Api\UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user',[Api\UserController::class, 'index']);
});


