<?php

use App\Core\Item\Models\Stock;
use App\Core\Request\Actions\RequestStockAction;
use App\Core\Request\Data\RequestStockData;
use App\Core\Request\Models\Request;
use Database\Factories\Item\StockFactory;
use Database\Factories\UserFactory;

use function Pest\Laravel\assertDatabaseHas;

it('should create a request of some items.', function () {
    $user = UserFactory::new()->create();
    /** @var Stock $stock */
    $stock = StockFactory::new()->create(['request_id' => null]);
    $data = new RequestStockData(fake()->text(), $stock->id);

    $request = RequestStockAction::execute($user, $data);

    assertDatabaseHas(Request::class, ['reason' => $data->reason]);
    assertDatabaseHas(Stock::class, ['request_id' => $request->id]);
});
