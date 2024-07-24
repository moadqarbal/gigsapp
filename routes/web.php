<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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


Route::get('/', [ListingController::class, 'index'])->name('listings.index');

Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create')->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->name('listings.store')->middleware('auth');

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit')->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update')->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy')->middleware('auth');

Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show')->middleware('auth');

Route::get('/register', [UserController::class, 'register'])->name('users.register')->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate')->middleware('guest');

Route::post('/users', [UserController::class, 'store'])->name('users')->middleware('guest');