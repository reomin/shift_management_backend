<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShiftController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/shifts', function (Request $request) {
    return $request->shifts();
});

Route::get('/users', [UserController::class, 'index']);

Route::post('/users', [UserController::class, 'create']);

Route::post('/shifts', [ShiftController::class, 'create']);

Route::get('/shifts', [ShiftController::class, 'index']);
