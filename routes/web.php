<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ProfileController;

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

// Home route
Route::get('/', [PublicController::class, 'home'])->name('homepage');

// ContactUs page route
Route::get('/contactUs', [PublicController::class, 'contactUs'])->name('contactUs');

// ContactUs submit route
Route::post('/contactUs/submit', [PublicController::class, 'contactSubmit'])->name('contactSubmit');

// Cryptocurrencies page route
Route::get('/cryptocurrencies', [PublicController::class, 'cryptocurrencies'])->name('cryptocurrencies');

// Profile route
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');

// Profile update route
Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');

// FAQ route
Route::get('/faq', [PublicController::class, 'faq'])->name('faq');

// Writer page route
Route::get('writer/write-article', [WriterController::class, 'writerPage'])->name('writerPage');