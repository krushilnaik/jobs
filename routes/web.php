<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
});

Route::get('/', function () {
  return view('home');
});
