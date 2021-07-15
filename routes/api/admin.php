<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', [\App\Http\Controllers\api\AuthController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\api\AuthController::class, 'register']);
Route::get('/logout', [\App\Http\Controllers\api\AuthController::class, 'logout'])->middleware('auth:api');