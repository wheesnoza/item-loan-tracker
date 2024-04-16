<?php

namespace App\Core\Item\Models;

use App\Core\Request\Models\Request;
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

    /**
     * @return BelongsTo<Loan, Stock>
     */
    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }

    /**
     * @return BelongsTo<Request, Stock>
     */
    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }
}
