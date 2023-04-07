<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;

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
Route::get('/loginPage',[LoginController::class,'login']);
Route::post('/loginPage',[LoginController::class,'login']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
