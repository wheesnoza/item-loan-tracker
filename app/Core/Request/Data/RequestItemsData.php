<?php

namespace App\Core\Request\Data;

class RequestItemsData
{
    public function __construct(
        public readonly string $reason,
        public readonly array $itemIds
    ) {
    }
}
