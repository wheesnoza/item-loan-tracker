<?php

namespace Database\Seeders;

use App\Core\Request\Models\Request;
use Database\Factories\Item\ItemFactory;
use Database\Factories\Item\StockFactory;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        $requests = Request::all();

        $stockFactory = StockFactory::new()
            ->sequence(...$requests->map(fn (Request $request) => ['request_id' => $request->id]));

        ItemFactory::new()->count(10)
            ->has($stockFactory)
            ->create();
    }
}
