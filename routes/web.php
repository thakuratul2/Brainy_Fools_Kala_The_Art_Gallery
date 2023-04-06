<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;

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

Route::get('/',[WelcomeController::class,'index']);
Route::get('/gallery',[GalleryController::class,'gallery']);
Route::get('/artist',[ArtistController::class,'artist']);
Route::get('/cart',[CartController::class,'cart']);