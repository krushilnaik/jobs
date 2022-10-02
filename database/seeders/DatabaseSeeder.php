<?php

namespace Database\Seeders;

use App\Models\Listing;
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
    // \App\Models\User::factory(10)->create();

    Listing::create([
      'title' => 'Laravel Senior Developer',
      'tags' => 'laravel,php',
      'company' => 'Acme Corp',
      'location' => 'Remote',
      'email' => 'email@acme.com',
      'website' => 'https://www.acme.com',
      'description' => 'So Laravel. Very PHP. 100 years JavaScript experience required',
    ]);

    Listing::create([
      'title' => 'JavaScript Senior Developer',
      'tags' => 'nextjs,typescript',
      'company' => 'Krushil Corp',
      'location' => 'Remote',
      'email' => 'email@krushil.com',
      'website' => 'https://www.krushil.com',
      'description' => 'I just want friends',
    ]);

    Listing::create([
      'title' => 'Samsung CEO',
      'tags' => 'smartphones',
      'company' => 'Samsung',
      'location' => 'Remote',
      'email' => 'email@samsung.com',
      'website' => 'https://www.samsung.com',
      'description' => 'pls save us',
    ]);

    Listing::create([
      'title' => 'Senior Assistant Vice-Engineer Plus Ultra',
      'tags' => 'smartphones',
      'company' => 'Apple',
      'location' => 'Remote',
      'email' => 'email@apple.com',
      'website' => 'https://www.apple.com',
      'description' => 'If you like (giving us) money, you belong here.',
    ]);

    Listing::factory(5)->create();
  }
}
