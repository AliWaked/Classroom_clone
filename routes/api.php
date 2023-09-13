<?php

use App\Http\Controllers\Api\V1\AccessTokensController;
use App\Http\Controllers\Api\V1\ClassroomController;
use App\Http\Controllers\Api\V1\ClassworkController;
use App\Http\Controllers\Api\V1\TopicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/v1')->group(function () {
    Route::middleware('guest:sanctum')->group(function () {
        Route::post('/auth/access-token', [AccessTokensController::class, 'store']);
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/auth/access-tokens', [AccessTokensController::class, 'index']);
        Route::delete('/auth/access-tokens', [AccessTokensController::class, 'destroy']);
        Route::apiResource('/classrooms', ClassroomController::class);
        Route::apiResource('classroom.classworks', ClassworkController::class);
        Route::apiResource('classroom.topics', TopicController::class);
    });
});
