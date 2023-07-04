<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\SubjectController;
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

Route::post('/advertisement/create/', [AdvertisementController::class, 'create']);
Route::post('/advertisement/update/{id}', [AdvertisementController::class, 'update']);
Route::get('/advertisement/show', [AdvertisementController::class, 'show']);
Route::delete('/advertisement/delete/{id}', [AdvertisementController::class, 'delete']);


Route::post('/subject/create', [SubjectController::class, 'create']);
Route::get('/subject/show', [SubjectController::class, 'show']);
Route::post('/subject/update/{id}', [SubjectController::class, 'update']);
Route::delete('/subject/delete/{id}', [SubjectController::class, 'delete']);
