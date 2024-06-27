<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\AuthController;

Route::get('/init',[TestController::class,'init']);

Route::post('email/request',[AuthController::class,'signWithEmail']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::middleware(['auth:api'])->group(function(){

});