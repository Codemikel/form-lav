<?php

use App\Http\Controllers\Api\v1\PropertyController;
use App\Http\Controllers\Api\v1\PropertyTextureDetailsController;
use App\Http\Controllers\Api\v1\PropertyVisualDetailsController;
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


Route::apiResource('/properties', PropertyController::class);
Route::apiResource('/propertiesVisualDetails', PropertyVisualDetailsController::class);
Route::apiResource('/propertiesTextureDetails', PropertyTextureDetailsController::class);
