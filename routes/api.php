<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backoffice\ApiController;

Route::get('/manga', [ApiController::class, 'getManga']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
