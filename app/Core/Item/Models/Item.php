<?php

namespace App\Core\Item\Models;

use App\Core\Item\Enums\ItemCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/*
 * @property int $id
 * @property string $name
 * @property string $description
 * @property ItemCategory $category
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Item extends Model
{
    protected function casts(): array
    {
        return [
            'category' => ItemCategory::class,
        ];
    }
}
