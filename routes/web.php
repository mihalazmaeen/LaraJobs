<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
//all listings
Route::get('/', [ListingController::class, 'index']);


// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store
Route::post('/listings',[ListingController::class, 'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Update listing 
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Delete listing 
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

 //Manage Listing
 Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');
//single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//Show register form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');

//Create new User
Route::post('/users',[UserController::class,'store']);
//log user out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
//show login
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
//Log in user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);

