<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', [ProfileController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/advertisement', [AdvertisementController::class, 'index']);
Route::get('/advertisement/edit/{id}', [AdvertisementController::class, 'edit']);
Route::get('/advertisement/delete/{id}', [AdvertisementController::class, 'destroy']);
Route::get('/advertisement/pdf', [AdvertisementController::class, 'createPDF']);
Route::get('/advertisement/show', [AdvertisementController::class, 'pdfView']);


Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/subject/show/', [SubjectController::class, 'show']);
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'destroy']);
Route::get('/subject/pdf', [SubjectController::class, 'createPDF']);
Route::get('/subject/pdfShow', [SubjectController::class, 'pdfView']);
