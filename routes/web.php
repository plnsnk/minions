<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartoonController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [MainController::class, 'index']);
Route::get('/register', [UserController::class, 'registerForm']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/auth', [UserController::class, 'loginForm'])->name('login');
Route::post('/auth', [UserController::class, 'login']);
Route::get('/quiz', [MainController::class, 'show']);
Route::post('/result', [MainController::class, 'result']);
Route::get('/cabinet', [UserController::class, 'cabinet'])->middleware('auth');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/minions', [MainController::class, 'minions']);
Route::get('/quiz-despicable', [CartoonController::class, 'showDespicable']); //альт ентер
Route::post('/result-despicable', [CartoonController::class, 'resultDespicable']);
//Route::post('/auth', [UserController::class, 'login'])->middleware('auth');









