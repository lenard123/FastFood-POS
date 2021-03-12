<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function(){
	Route::view('/login', 'auth.login')->name('login');
	Route::post('/login', \App\Http\Controllers\Auth\LoginController::class);
});

Route::middleware(['auth','admin'])->group(function(){
	Route::view('/admin', 'admin.dashboard')->name('dashboard');
	Route::get('/logout', \App\Http\Controllers\Auth\LogoutController::class);
});