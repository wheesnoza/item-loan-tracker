<?php

namespace App\Core\Request\Models;

use App\Core\Item\Models\Item;
use App\Core\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $reason
 * @property State $currentState
 * @property Illuminate\Database\Eloquent\Collection<State> $states
 */
class Request extends Model
{
    protected $fillable = [
        'reason',
    ];

    /**
     * @return BelongsTo<User, Request>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany<Item>
     */
    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, RequestedItem::class);
    }

    /**
     * @return HasOne<State>
     */
    public function currentState(): HasOne
    {
        return $this->hasOne(State::class)->latestOfMany();
    }

    /**
     * @return HasMany<State>
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}
