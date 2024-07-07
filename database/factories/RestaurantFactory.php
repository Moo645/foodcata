<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->name,
            'address' => fake()->address,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Restaurant $restaurant) {
            // 隨機附加 1 至 4 個類別
            $categories = \App\Models\Category::inRandomOrder()->take(rand(1, 4))->pluck('id');
            $restaurant->categories()->attach($categories);
        });
    }
}
