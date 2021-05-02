<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\TourController;

Route::get('/', [TourController::class, 'home']);
Route::get('/tour/{tourId}', [TourController::class, 'tour']);
Route::get('/tour/{tourId}/contact', [TourController::class, 'contactInfo']);
Route::get('/who', [TourController::class, 'who']);
