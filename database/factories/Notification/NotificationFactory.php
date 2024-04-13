<?php

namespace Database\Factories\Notification;

use App\Core\Notification\Enums\NotificationCategory;
use App\Core\Notification\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => '{}',
            'category' => fake()->randomElement(NotificationCategory::cases()),
        ];
    }
}
