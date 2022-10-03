<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
  public function index()
  {
    // dd(request('tag'));

    // show all listings
    return view('listings', [
      'heading' => 'Latest Listings',
      'listings' => Listing::latest()
        ->filter(request(['tag', 'search']))
        ->paginate(6),
    ]);
  }

  public function show(Listing $listing)
  {
    // show single listing
    return view('listing', $listing);
  }

  public function create()
  {
    return view('create_listing');
  }

  public function store()
  {
    Listing::create(request()->except('_token'));

    return redirect('/')->with('message', 'Listing created successfully');
  }
}
