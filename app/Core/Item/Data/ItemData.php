<?php

namespace App\Core\Item\Data;

use App\Core\Item\Enums\ItemCategory;
use App\Core\Shared\Data\Data;
use Spatie\LaravelData\Attributes\FromRouteParameterProperty;

class ItemData extends Data
{
    public function __construct(
        #[FromRouteParameterProperty('item')]
        public readonly ?string $id,
        public readonly string $name,
        public readonly string $description,
        public readonly ItemCategory $category,
        public readonly int $quantity
    ) {
    }
}
