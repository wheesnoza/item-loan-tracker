<?php

namespace App\Core\Request\Actions;

use App\Core\Item\Models\Stock;
use App\Core\Request\Data\RequestStockData;
use App\Core\Request\Models\Request;
use App\Core\User\Models\User;
use Illuminate\Support\Facades\DB;

class RequestStockAction
{
    public static function execute(User $performer, RequestStockData $data): Request
    {
        return DB::transaction(function () use ($performer, $data) {
            /** @var Request $request */
            $request = $performer->requests()->create($data->toArray());

            Stock::query()->whereKey($data->stockId)->update(['request_id' => $request->id]);

            return $request;
        });
    }
}
