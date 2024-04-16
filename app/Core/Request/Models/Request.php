<?php

namespace App\Core\Request\Models;

use App\Core\Item\Models\Stock;
use App\Core\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $user_id
 * @property string $reason
 * @property State $currentState
 * @property Illuminate\Database\Eloquent\Collection<State> $states
 * @property Stock $stock
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
     * @return HasOne<Stock>
     */
    public function stock(): HasOne
    {
        return $this->hasOne(Stock::class);
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
