<?php

namespace App\Core\Item\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $item_id
 * @property string $item_code
 * @property Illuminate\Support\Carbon $created_at
 * @property Illuminate\Support\Carbon $updated_at
 * @property Item $item
 */
class Stock extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'item_id',
        'item_code',
    ];

    /**
     * @return BelongsTo<Item, Stock>
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
