<?php

namespace App\Core\Item\Actions;

use App\Core\Item\Data\ItemData;
use App\Core\Item\Models\Item;
use Illuminate\Support\Facades\DB;

class UpsertItemAction
{
    public static function execute(ItemData $data): Item
    {
        return DB::transaction(function () use ($data) {
            /** @var Item $item */
            $item = Item::query()->updateOrCreate([
                'id' => $data->id,
            ], $data->toArray());

            IncreaseStockAction::execute($item, $data->quantity);

            return $item;
        });
    }
}
