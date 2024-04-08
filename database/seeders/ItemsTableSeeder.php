<?php

namespace Database\Seeders;

use Database\Factories\ItemFactory;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        ItemFactory::new()->count(10)->create();
    }
}
