<?php

namespace Database\Factories;

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
        ];
    }
}
