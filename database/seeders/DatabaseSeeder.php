<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      "name" => "Krushil",
      "email" => "krushil@naik.com",
      "password" => bcrypt("test1234"),
    ]);

    User::factory(3)->create();

    Listing::factory(10)->create();
  }
}
