<?php

namespace App\Core\Item\Models;

use App\Core\Item\Enums\ItemCategory;
use Illuminate\Database\Eloquent\Model;

/*
 * @property int $id
 * @property string $name
 * @property string $description
 * @property ItemCategory $category
 * @property Illuminate\Support\Carbon $created_at
 * @property Illuminate\Support\Carbon $updated_at
 */
class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
    ];

    /**
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return [
            'category' => ItemCategory::class,
        ];
    }
}
