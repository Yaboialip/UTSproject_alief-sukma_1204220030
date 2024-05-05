<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
use App\Models\Item;

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
Route::get('home', [HomeController::class, 'index'])->name('home'); 
Route::get('profile', ProfileController::class)->name('profile');
Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::resource('food', FoodController::class);
Route::get('/', function () {
    return view('welcome');
    
});
