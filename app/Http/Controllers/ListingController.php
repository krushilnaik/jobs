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

  public function edit(Listing $listing)
  {
    return view('edit_listing', $listing);
  }

  public function update(Request $request, Listing $listing)
  {
    $listing->update($request->except('_token'));

    return back()->with('message', 'Listing updated successfully');
  }
}
