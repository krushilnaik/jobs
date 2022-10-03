<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

Route::prefix('/listings')->group(function () {
  Route::get('/', [ListingController::class, 'index']);

  Route::get('/create', [ListingController::class, 'create']);
  Route::post('/create', [ListingController::class, 'store']);

  Route::get('/{listing}', [ListingController::class, 'show']);
  Route::get('/{listing}/edit', [ListingController::class, 'edit']);
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/', function () {
  return view('home');
});
