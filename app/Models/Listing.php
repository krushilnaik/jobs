<?php

namespace App\Models;

class Listing
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'description' => 'This is the listing with ID 1',
        'title' => 'Listing 1',
      ],
      [
        'id' => 2,
        'description' => 'This is the listing with ID 2',
        'title' => 'Listing 2',
      ],
      [
        'id' => 3,
        'description' => 'This is the listing with ID 3',
        'title' => 'Listing 3',
      ],
    ];
  }

  public static function find($id)
  {
    $listings = self::all();

    foreach ($listings as $listing) {
      if ($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}

?>
