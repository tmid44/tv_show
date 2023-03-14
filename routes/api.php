<?php

use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TimetableController;
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

Route::get('advertising/', [AdvertisingController::class, 'index']);
Route::post('advertising/store/', [AdvertisingController::class, 'store']);
Route::get('shows/', [ShowController::class, 'index']);
Route::post('shows/store/', [ShowController::class, 'store']);
Route::get('timetable/', [TimetableController::class, 'index']);
Route::post('timetable/store/', [TimetableController::class, 'store']);




