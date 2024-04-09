<?php

namespace Database\Seeders;

use Database\Factories\ItemFactory;
use Database\Factories\RequestFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $item = ItemFactory::new()->count(2);
        $request = RequestFactory::new()->has($item)->count(2);
        UserFactory::new()
            ->has($item)
            ->has($request)
            ->count(10)
            ->create();
    }
}
