<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::get('/gallery',[GalleryController::class,'gallery']);
Route::get('/artist',[ArtistController::class,'artist']);
Route::get('/cart',[CartController::class,'cart']);
Route::get('/loginPage',[LoginController::class,'login']);
Route::get('/dashboard',[DashboardController::class,'Dashboard']);
Route::post('/loginPage',[LoginController::class,'login']);
Route::get('/registerPage',[RegisterController::class,'register']);
Route::get('/manage-user',[ManageUserController::class,'manageUser']);

Route::post('/',[LogoutController::class,'destroy'])->name('logout');
