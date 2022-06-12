<?php

use App\Http\Controllers\Api\V1\Admin\UserApiController;
use App\Http\Controllers\Api\AuthController;

Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::apiResource('users', UserApiController::class);
});
