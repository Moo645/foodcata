<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            "台式小吃",
            "海鮮料理",
            "夜市美食",
            "台式便當",
            "牛肉麵",
            "滷味",
            "米糕與粽子",
            "鹽酥雞",
            "豆花與甜品",
            "火鍋"
        ];

        return [
            'name' => fake()->randomElement($categories)
        ];
    }
}
