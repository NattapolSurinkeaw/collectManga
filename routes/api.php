<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backoffice\ApiController;

Route::get('/bookAll', [ApiController::class, 'getBookAll']);
Route::get('/getpayment', [ApiController::class, 'getSlipPayment']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
