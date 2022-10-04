<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

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
    $fields = request()->except("_token");
    $fields["user_id"] = Auth::id();

    Listing::create($fields);

    return redirect("/manage")->with("message", "Listing created successfully");
  }

  public function edit(Listing $listing)
  {
    return view("jobs.edit", $listing);
  }

  public function update(Listing $listing)
  {
    if ($listing->user_id != auth()->id()) {
      abort(403, "Unauthorized action.");
    }

    $listing->update(request()->except("_token"));

    return redirect("/listings/" . $listing->id)->with(
      "message",
      "Listing updated successfully"
    );
  }

  public function manage()
  {
    $listings = Listing::all()->where("user_id", "=", auth()->id());

    return view("jobs.manage", ["listings" => $listings]);
  }
}
