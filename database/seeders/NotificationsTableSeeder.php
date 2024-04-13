<?php

namespace Database\Seeders;

use Database\Factories\Notification\NotificationFactory;
use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    public function run(): void
    {
        NotificationFactory::new()->count(5)->create();
    }
}
