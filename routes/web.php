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

Route::get('/', [TourController::class, 'home'])->name('home');
Route::get('/tour/{tourId}', [TourController::class, 'tour'])->name('tour');
//Route::get('/contact/{tourId}', [TourController::class, 'contact'])->name('contact');
//Route::get('/resume/{tourId}', [TourController::class, 'resume'])->name('resume');
//Route::get('/who', [TourController::class, 'who'])->name('who');
//Route::post('/order', [TourController::class, 'saveOrder']);
