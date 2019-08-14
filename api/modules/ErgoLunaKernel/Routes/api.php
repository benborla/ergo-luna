<?php

use Illuminate\Http\Request;

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
Route::middleware('api')->group(function () {
    Route::post('/auth', \Module\ErgoLunaKernel\Http\Controllers\AuthController::class)->name('api.ergo_luna.auth');
});

Route::middleware('auth:api')->group(function () {
    Route::get('/auth/get-user', \Module\ErgoLunaKernel\Http\Controllers\AuthController::class . '@getAuthUser')->name('api.ergo_luna.auth.get_user');
    Route::get('/kernel-test', function () {
        request()->json(true);
        return response()->json(['message' => 'Hello from /api/kernel']);
    });
});
