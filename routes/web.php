<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AnimalController::class, 'index']);

Route::get('/signin', [UserController::class, 'signin']);

Route::get('/signup', [UserController::class, 'signup']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/addAnimal', [AnimalController::class, 'addAnimal']);

Route::get('/moderator', [UserController::class, 'moderator']);

Route::get('/search', [AnimalController::class, 'search']);

Route::get('/animal/{id}', [AnimalController::class, 'animal']);

Route::post('/signup/create', [UserController::class, 'signup_valid']);

Route::post('/signin/auth', [UserController::class, 'signin_valid']);

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/addAnimal/create', [AnimalController::class, 'animalAdd']);

Route::get('/moderator/{id}/status', [AnimalController::class, 'change']);
