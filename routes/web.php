<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;

Route::prefix('api')->middleware('api')->group(function () {
    Route::apiResource('products', ProductController::class);
});

Route::get('/', function () {
    return view('welcome');
});
