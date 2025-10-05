<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\AccountController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('ziemart/register', [AccountController::class, 'store']);
Route::post('ziemart/verifyCodeEmail', [AccountController::class, 'verifyCode']);
Route::get('ziemart/read', [AccountController::class, 'index']);
Route::put('ziemart/update/{id}', [AccountController::class, 'update']);
Route::delete('ziemart/delete/{id}', [AccountController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);


Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});