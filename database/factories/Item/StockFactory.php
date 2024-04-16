<?php

namespace Database\Factories\Item;

use App\Core\Item\Actions\GenerateItemCodeAction;
use App\Core\Item\Models\Stock;
use Database\Factories\Request\RequestFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition(): array
    {
        return [
            'item_id' => ItemFactory::new(),
            'request_id' => RequestFactory::new(),
            'item_code' => GenerateItemCodeAction::execute(),
        ];
    }
}
