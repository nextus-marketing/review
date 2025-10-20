<?php

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

Route::view('/', 'Frontend.home')->name('home');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-of-use', 'Frontend.terms-of-use')->name('terms-of-use');
Route::view('/accessibility', 'Frontend.accessibility')->name('accessibility');
Route::view('/do-not-sell-share-my-personal-information', 'Frontend.do-not-sell-share-my-personal-information')->name('do-not-sell-share-my-personal-information');
Route::view('/list-the-use-od-my-sensitive-personal-information', 'Frontend.list-the-use-od-my-sensitive-personal-information')->name('list-the-use-od-my-sensitive-personal-information');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
