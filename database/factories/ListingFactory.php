<?php

namespace Database\Factories;

use App\Models\User;
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
    $roles = [
      "Senior Laravel Engineer",
      "Junior Frontend Developer",
      "Fullstack Intern",
      "DevOps Engineer",
      "CEO",
    ];

    $tags = ["laravel,react", "vue,tailwindcss", "ruby on rails"];

    $userIds = User::all()
      ->pluck("id")
      ->toArray();

    return [
      "title" => $this->faker->randomElement($roles),
      "tags" => $this->faker->randomElement($tags),
      "company" => $this->faker->company(),
      "location" => $this->faker->city(),
      "email" => $this->faker->companyEmail(),
      "website" => $this->faker->url(),
      "description" => join(" ", $this->faker->sentences(4)),
      "user_id" => $this->faker->randomElement($userIds),
    ];
  }
}
