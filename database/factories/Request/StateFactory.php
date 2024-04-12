<?php

namespace Database\Factories\Request;

use App\Core\Request\Enums\RequestState;
use App\Core\Request\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    protected $model = State::class;

    public function definition(): array
    {
        return [
            'request_id' => RequestFactory::new(),
            'value' => fake()->randomElement(RequestState::cases()),
            'transition_reason' => fake()->text(),
        ];
    }
}
