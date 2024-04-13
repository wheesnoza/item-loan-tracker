<?php

use App\Core\Item\Actions\UpsertItemAction;
use App\Core\Item\Data\ItemData;
use App\Core\Item\Enums\ItemCategory;
use App\Core\Item\Models\Item;
use App\Core\Item\Models\Stock;
use Database\Factories\Item\ItemFactory;
use Database\Factories\Item\StockFactory;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;

it('should create a new item with stocks quantity of 10.', function () {
    $quantity = 10;
    $data = new ItemData(
        null,
        fake()->name(),
        fake()->text(),
        fake()->randomElement(ItemCategory::cases()),
        $quantity
    );

    $item = UpsertItemAction::execute($data);

    assertDatabaseHas(Item::class, $item->only(['id', 'name', 'description']));
    assertDatabaseCount(Stock::class, $quantity);
});

it('should edit a item and increase stocks quantity to 10.', function () {
    $currentQuantity = 10;
    $increaseQuantity = 10;
    /** @var Item $item */
    $item = ItemFactory::new()->has(StockFactory::new()->count($currentQuantity))->create();
    $data = new ItemData(
        $item->id,
        fake()->name(),
        fake()->text(),
        fake()->randomElement(ItemCategory::cases()),
        $increaseQuantity
    );

    $item = UpsertItemAction::execute($data);

    assertDatabaseHas(Item::class, $item->only(['id', 'name', 'description']));
    assertDatabaseCount(Stock::class, $increaseQuantity + $currentQuantity);
});
