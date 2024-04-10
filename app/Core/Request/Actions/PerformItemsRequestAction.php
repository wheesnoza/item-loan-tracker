<?php

namespace App\Core\Request\Actions;

use App\Core\Request\Data\RequestItemsData;
use App\Core\Request\Models\Request;
use App\Core\User\Models\User;

class PerformItemsRequestAction
{
    public static function execute(User $performer, RequestItemsData $data): void
    {

        /** @var Request $request */
        $request = $performer->requests()->create(['reason' => $data->reason]);

        $request->items()->attach($data->itemIds);
    }
}
