<?php

use App\Core\Request\Actions\RequestItemAction;
use App\Core\Request\Data\RequestItemsData;
use App\Core\Request\Models\Request;
use App\Core\Request\Models\RequestedItem;
use Database\Factories\Item\ItemFactory;
use Database\Factories\UserFactory;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;

it('should create a request of some items.', function () {
    $user = UserFactory::new()->create();
    $quantity = 2;
    $items = ItemFactory::new()->count($quantity)->create();
    $data = new RequestItemsData(fake()->text(), $items->modelKeys());

    RequestItemAction::execute($user, $data);

    assertDatabaseHas(Request::class, ['reason' => $data->reason]);
    assertDatabaseCount(RequestedItem::class, $quantity);
});
