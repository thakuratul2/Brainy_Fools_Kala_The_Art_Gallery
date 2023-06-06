<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\auth\AuthController;




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

//Login & Register route
Route::get('/',[welcomeController::class,'welcome'])->name('welcome.page');

//group
Route::controller(AuthController::class)->group(function(){
    Route::get('/login',[AuthController::class,'LoginPage'])->name('login.page')->middleware('AlreadyLoggedIn');
Route::get('/register',[AuthController::class,'RegisterPage'])->name('register.page')->middleware('AlreadyLoggedIn');
Route::post('/register',[AuthController::class,'RegisterUser'])->name('register.user');
Route::post('/login',[AuthController::class,'LoginUser'])->name('login.user');
Route::get('/logout',[AuthController::class,'Logout'])->name('logout.option');
});


//pages
Route::get('/gallery',[GalleryController::class,'Gallery'])->name('gallery.page');
Route::get('/artist',[ArtistController::class,'Artist'])->name('artist.page');
Route::get('/about',[AboutController::class,'About'])->name('about.page');
Route::get('/cart',[CartController::class,'cart'])->name('cart.page');
Route::get('/product-detail',[ProductController::class,'Product'])->name('product.page');

//middleware group
Route::get('/adminpanel',[AuthController::class,'AdminDash'])->name('admin.dash')->middleware('isLoggedIn');