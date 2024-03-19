<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');


// auth routes

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::post('/store', [\App\Http\Controllers\AuthController::class,'store'])->name('store');
Route::post('/loginUser', [\App\Http\Controllers\AuthController::class,'loginUser'])->name('loginUser');

Route::get('/logout', [\App\Http\Controllers\AuthController::class,'logOut'])->name('logout');

// password reset routes
Route::post('/submit-forgot',[PasswordController::class,'store'])->name('store.forgot.password');
Route::get('/forgot',[PasswordController::class,'show'])->name('forget.password');
Route::get('/password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordController::class, 'reset'])->name('password.update');
