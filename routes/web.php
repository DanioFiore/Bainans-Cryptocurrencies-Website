<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
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
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

// Profile update route
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// FAQ route
Route::get('/faq', [PublicController::class, 'faq'])->name('faq');

// Work with us route
Route::get('/work-with-us', [WriterController::class, 'workWithUs'])->middleware('auth')->name('workWithUs');

// Become a writer button
Route::get('/request/writer', [WriterController::class, 'becomeWriter'])->middleware('auth')->name('become.writer');

// Make user writer
Route::get('/make/writer/{user}', [WriterController::class, 'makeWriter'])->name('make.writer');

// Writer page route
Route::get('/writer/write-article', [WriterController::class, 'writePage'])->middleware('isWriter')->name('writer.writePage');

// Category show route
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

// All articles route
Route::get('all/articles', [ArticleController::class, 'indexArticle'])->middleware('auth')->name('articles.index');

// Article details
Route::get('/reading/article/{article}', [ArticleController::class, 'showArticle'])->middleware('auth')->name('articles.show');

// Search articles
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('articles.search');

