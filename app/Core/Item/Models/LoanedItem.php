<?php

namespace App\Core\Item\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LoanedItem extends Pivot
{
    protected $table = 'loaned_items';
}
