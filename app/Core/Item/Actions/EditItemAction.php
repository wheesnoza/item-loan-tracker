<?php

namespace App\Core\Item\Actions;

use App\Core\Item\Data\ItemData;
use App\Core\Item\Models\Item;
use Illuminate\Support\Facades\DB;

class EditItemAction
{
    public function execute(Item $item, ItemData $data): Item
    {
        return DB::transaction(function () use ($item, $data) {
            $item->create($data->toArray());
            IncreaseStockAction::execute($item, $data->quantity);

            return $item->refresh();
        });
    }
}
