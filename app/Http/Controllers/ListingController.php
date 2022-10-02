<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
  public function index()
  {
    // show all listings
    return view('listings', [
      'heading' => 'Latest Listings',
      'listings' => Listing::all(),
    ]);
  }

  public function show(Listing $listing)
  {
    // show single listing
    return view('listing', $listing);
  }
}
