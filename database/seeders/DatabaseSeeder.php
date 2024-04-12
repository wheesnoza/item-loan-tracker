<?php

namespace Database\Seeders;

use Database\Factories\Item\ItemFactory;
use Database\Factories\Item\StockFactory;
use Database\Factories\Request\RequestFactory;
use Database\Factories\Request\StateFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $item = ItemFactory::new()->has(StockFactory::new()->count(10))->count(2);
        $request = RequestFactory::new()->has($item)->has(StateFactory::new()->count(2))->count(2);
        UserFactory::new()
            ->has($item)
            ->has($request)
            ->count(10)
            ->create();
    }
}
