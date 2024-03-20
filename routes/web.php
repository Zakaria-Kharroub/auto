<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\VoitureController;


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

Route::get('/registerUser', [\App\Http\Controllers\AuthController::class, 'registerUser'])->name('registeruser');
Route::get('/registerAgence', [\App\Http\Controllers\AuthController::class, 'registerAgence'])->name('registeragence');

Route::post('/storeAgence', [\App\Http\Controllers\AuthController::class, 'storeAgence'])->name('storeagence');




// password reset routes
Route::post('/submit-forgot',[PasswordController::class,'store'])->name('store.forgot.password');
Route::get('/forgot',[PasswordController::class,'show'])->name('forget.password');
Route::get('/password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordController::class, 'reset'])->name('password.update');






// agence routes
Route::get('/agence', [AgenceController::class, 'index'])->name('agence');
Route::get('/voiture', [VoitureController::class, 'index'])->name('voiture');



// voiture routes
Route::post('/addVoiture', [VoitureController::class, 'addVoiture'])->name('addvoiture');   
Route::put('/updateVoiture/{id}', [VoitureController::class, 'updateVoiture'])->name('updatevoiture');



