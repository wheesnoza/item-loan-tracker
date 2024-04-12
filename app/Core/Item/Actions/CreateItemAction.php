<?php

namespace App\Core\Item\Actions;

use App\Core\Item\Data\ItemData;
use App\Core\Item\Models\Item;
use Illuminate\Support\Facades\DB;

class CreateItemAction
{
    public static function execute(ItemData $data): Item
    {
        return DB::transaction(function () use ($data) {
            /** @var Item $item */
            $item = Item::query()->create($data->toArray());

            IncreaseStockAction::execute($item, $data->quantity);

            return $item;
        });
    }
}
