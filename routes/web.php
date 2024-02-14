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

Route::get('/', function () {
    return view('index');
});

Route::get('/signin', [UserController::class, 'signin']);

Route::get('/signup', [UserController::class, 'signup']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/addAnimal', [AnimalController::class, 'addAnimal']);
