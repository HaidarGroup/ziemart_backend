<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/ziemart/register', AccountController::class);

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});