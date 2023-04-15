<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\ManageArtistController;
use App\Http\Controllers\AddCategories;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\AlreadtCheck;
use App\Http\Controllers\ManageCategories;

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
Route::get('/gallery',[GalleryController::class,'ShowCate']);
Route::get('/artist',[ArtistController::class,'artist']);

Route::get('/cart',[CartController::class,'cart']);
Route::get('/loginPage',[LoginController::class,'Login'])->name('login.page')->middleware(AlreadtCheck::class,'isAlready');
Route::post('/loginPage',[LoginController::class,'loginUser'])->name('login.user');
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->middleware(AuthCheck::class,'isLogin');
Route::get('/registerPage',[RegisterController::class,'register'])->name('register.page');
Route::post('/registerPage',[RegisterController::class,'registerUser'])->name('register.user');
Route::get('/manage-user',[ManageUserController::class,'manageUser']);
Route::get('/manage-user',[ManageUserController::class,'show']);
Route::get('/manage-user/profile',[ProfileController::class,'Profile'])->name('profile.page');
Route::get('/manage-user/{uid}',[ManageUserController::class,'deleteData'])->name('manage-delete');

Route::post('/',[LogoutController::class,'destroy'])->name('logout');
Route::get('/manage-admin',[ManageAdminController::class,'Admin',]);
Route::get('/manage-admin',[ManageAdminController::class,'AdminShow']);
Route::get('/manage-admin/{uid}',[ManageAdminController::class,'DeleteAdmin']);
Route::get('/manage-artist',[ManageArtistController::class,'Artist']);
Route::get('/manage-artist',[ManageArtistController::class,'ArtistShow']);
Route::get('/manage-artist/{uid}',[ManageArtistController::class,'DeleteArtist']);
Route::get('/add-categories',[AddCategories::class,'AddCate']);
Route::post('/add-categories',[AddCategories::class,'AddCateData']);
Route::get('/add-categories',[AddCategories::class,'ShowCate']);

