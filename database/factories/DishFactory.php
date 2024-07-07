<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dishes = [
            "麻婆豆腐",
            "宮保雞丁",
            "紅燒肉",
            "糖醋排骨",
            "清蒸魚",
            "口水雞",
            "西紅柿炒蛋",
            "魚香茄子",
            "燒賣",
            "餃子",
            "烤鴨",
            "酸辣湯",
            "擔擔麵",
            "燒餅",
            "鍋包肉",
            "螞蟻上樹",
            "涼拌海帶絲",
            "水煮魚",
            "辣子雞丁",
            "紅油抄手"
        ];

        // $restaurants = Restaurant::factory(3)->create();
        // $categories = Category::factory(3)->create();

        return [
            'name' => fake()->randomElement($dishes),
            'restaurant_id' => Restaurant::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(30, 300),
            'image_url' => fake()->imageUrl(category:'food')
        ];
    }
}
