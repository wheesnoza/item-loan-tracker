<?php

namespace Database\Factories;

use App\Core\Request\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    protected $model = Request::class;

    public function definition(): array
    {
        return [
            'user_id' => UserFactory::new(),
            'reason' => fake()->text(),
        ];
    }
}
