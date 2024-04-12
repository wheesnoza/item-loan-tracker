<?php

namespace App\Core\Request\Actions;

use App\Core\Request\Data\RequestItemsData;
use App\Core\Request\Models\Request;
use App\Core\User\Models\User;
use Illuminate\Support\Facades\DB;

class RequestItemAction
{
    public static function execute(User $performer, RequestItemsData $data): Request
    {
        return DB::transaction(function () use ($performer, $data) {
            /** @var Request $request */
            $request = $performer->requests()->create(['reason' => $data->reason]);

            $request->items()->attach($data->itemIds);

            return $request;
        });
    }
}
