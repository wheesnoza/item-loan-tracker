<?php

use App\Core\Item\Actions\IncreaseStockAction;
use App\Core\Item\Models\Stock;
use Database\Factories\Item\ItemFactory;

use function Pest\Laravel\assertDatabaseCount;

it('should increase the item inventory quantity for 10.', function () {
    $item = ItemFactory::new()->create();
    $quantity = 10;

    IncreaseStockAction::execute($item, $quantity);

    assertDatabaseCount(Stock::class, $quantity);
});
