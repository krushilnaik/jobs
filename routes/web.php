<?php

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
  Route::get('/', function () {
    return view('listings', [
      'heading' => 'Latest Listings',
      'listings' => Listing::all(),
    ]);
  });

  Route::get('/{listing}', function (Listing $listing) {
    return view('listing', $listing);
  });
});

Route::get('/', function () {
  return '<h1>Ya done goofed</h1>';
});
