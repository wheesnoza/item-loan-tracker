<?php

namespace Database\Seeders;

use Database\Factories\Item\ItemFactory;
use Database\Factories\Item\StockFactory;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        ItemFactory::new()->count(10)
            ->has(StockFactory::new()->count(2))
            ->create();
    }
}
