<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
  public function index()
  {
    // show all listings (or filtered)
    return view("jobs.all", [
      "heading" => "Latest Listings",
      "listings" => Listing::where(
        "title",
        "LIKE",
        "%" . (request()->search ?? "") . "%"
      )
        ->where("tags", "LIKE", "%" . (request()->tag ?? "") . "%")
        ->get(),
    ]);
  }

  public function show(Listing $listing)
  {
    // show single listing
    return view("jobs.single", $listing);
  }

  public function create()
  {
    return view("jobs.create");
  }

  public function store()
  {
    Listing::create(request()->except("_token"));

    return redirect("/")->with("message", "Listing created successfully");
  }

  public function edit(Listing $listing)
  {
    return view("jobs.edit", $listing);
  }

  public function update(Listing $listing)
  {
    $listing->update(request()->except("_token"));

    return redirect("/listings/" . $listing->id)->with(
      "message",
      "Listing updated successfully"
    );
  }
}
