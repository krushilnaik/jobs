<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->sentence(),
      'tags' => 'laravel, php',
      'company' => $this->faker->company(),
      'location' => $this->faker->city(),
      'email' => $this->faker->companyEmail(),
      'website' => $this->faker->url(),
      'description' =>
        'So Laravel. Very React Hooks. 100+ years Python experience required. cOmPtEtIvE SaLaRy.',
    ];
  }
}
