<?php

namespace App\Core\Item\Models;

use App\Core\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Loan extends Pivot
{
    protected $table = 'loans';

    /**
     * @return BelongsTo<User,Loan>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo<Stock,Loan>
     */
    public function stock(): BelongsTo
    {
        return $this->belongsTo(Stock::class);
    }
}
