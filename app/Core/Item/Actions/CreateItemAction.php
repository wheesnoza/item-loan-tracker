<?php

namespace App\Core\Item\Actions;

use App\Core\Item\Data\CreateItemData;
use App\Core\Item\Models\Item;

class CreateItemAction
{
    public static function execute(CreateItemData $data): Item
    {
        /** @var Item $item */
        $item = Item::query()->create($data->toArray());

        return $item;
    }
}
