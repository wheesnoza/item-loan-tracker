<?php

namespace Database\Factories\Item;

use App\Core\Item\Enums\ItemCategory;
use App\Core\Item\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'category' => fake()->randomElement(ItemCategory::cases()),
        ];
    }
}
