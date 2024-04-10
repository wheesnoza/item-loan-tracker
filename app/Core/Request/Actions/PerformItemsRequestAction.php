<?php

namespace App\Core\Request\Actions;

use App\Core\Request\Models\Request;
use App\Core\User\Models\User;

class PerformItemsRequestAction
{
    public static function execute(User $performer, string $reason, array $itemIds): void
    {
        
        /** @var Request $request */
        $request = $performer->requests()->create(['reason' => $reason]);

        $request->items()->attach($itemIds);
    }
}
