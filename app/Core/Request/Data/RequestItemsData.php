<?php

namespace App\Core\Request\Data;

use App\Core\Shared\Data\Data;

class RequestItemsData extends Data
{
    /**
     * @param  array<int>  $itemIds
     */
    public function __construct(
        public readonly string $reason,
        public readonly array $itemIds
    ) {
    }
}
