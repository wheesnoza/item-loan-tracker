<?php

namespace App\Core\Item\Data;

use App\Core\Item\Enums\ItemCategory;
use App\Core\Shared\Data\Data;

class CreateItemData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly ItemCategory $category,
        public readonly int $quantity
    ) {
    }
}
