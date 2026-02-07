<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/customers', CustomerController::class);

Route::apiResource('/districts', DistrictController::class);
Route::apiResource('/divisions', DivisionController::class);

Route::apiResource('/roles', RoleController::class);
