<?php

namespace App\Core\Item\Actions;

use App\Core\Item\Models\Item;
use App\Core\Item\Models\Stock;
use Illuminate\Support\Collection;

class IncreaseStockAction
{
    public static function execute(Item $item, int $quantity): void
    {
        $stock = Collection::times($quantity, fn () => [
            'item_id' => $item->id,
            'item_code' => GenerateItemCodeAction::execute(),
        ]);

        Stock::insert($stock->toArray());
    }
}
