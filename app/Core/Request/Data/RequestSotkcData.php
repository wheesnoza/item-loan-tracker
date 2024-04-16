<?php

namespace App\Core\Request\Data;

use App\Core\Shared\Data\Data;

class RequestStockData extends Data
{
    public function __construct(
        public readonly string $reason,
        public readonly int $stockId
    ) {
    }
}
