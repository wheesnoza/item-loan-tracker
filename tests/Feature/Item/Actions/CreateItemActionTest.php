<?php

use App\Core\Item\Actions\CreateItemAction;
use App\Core\Item\Data\CreateItemData;
use App\Core\Item\Enums\ItemCategory;
use App\Core\Item\Models\Item;
use App\Core\Item\Models\Stock;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;

it('should create a new item with inventory quantity of 10.', function () {
    $quantity = 10;
    $data = new CreateItemData(
        fake()->name(),
        fake()->text(),
        fake()->randomElement(ItemCategory::cases()),
        $quantity
    );

    $item = CreateItemAction::execute($data);

    assertDatabaseHas(Item::class, $item->only(['id', 'name', 'description']));
    assertDatabaseCount(Stock::class, $quantity);
});
