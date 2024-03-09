<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\AuthenticationController;

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

Route::get('/', [AuthenticationController::class ,'showLogin'])->name('/');

Route::post('/', [AuthenticationController::class ,'loginOrSignUp'])->name('loginOrSignUp');

Route::resource('home' , HomeController::class )->middleware('auth');

Route::get('/logout', [AuthenticationController::class ,'logOut'])->name('logOut');

