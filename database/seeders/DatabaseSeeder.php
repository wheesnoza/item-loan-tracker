<?php

namespace Database\Seeders;

use Database\Factories\ItemFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        UserFactory::new()->has(ItemFactory::new()->count(2))->count(10)->create();
    }
}
