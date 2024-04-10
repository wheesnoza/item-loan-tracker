<?php

namespace App\Core\Request\Models;

use App\Core\Item\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
    ];

    /**
     * @return BelongsToMany<Item>
     */
    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, RequestedItem::class);
    }
}
