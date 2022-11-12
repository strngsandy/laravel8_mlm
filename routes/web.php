<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\Profile\UserProfileController;

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

Route::get('/',[HomeController::class,'index'])->name('user.home'); 
Route::get('/login',[LoginController::class,'index'])->name('user.login');
Route::post('/login',[LoginController::class,'loginProcess'])->name('user.login.process');
Route::get('/register',[RegisterController::class,'index'])->name('user.register');
Route::post('/search-sponsor', [RegisterController::class, 'search_sponsorid'])->name('search.sponsorid');
Route::post('/store', [RegisterController::class, 'store'])->name('user.store');
Route::get('/dashboard',[UserDashboardController::class,'index'])->name('user.dashboard');
Route::get('/profile',[UserProfileController::class,'index'])->name('user.profile');
Route::get('/logout',[LoginController::class,'logout'])->name('user.logout');