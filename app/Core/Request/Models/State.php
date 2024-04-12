<?php

namespace App\Core\Request\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\Request\Enums\RequestState;

/**
 * @property int $id
 * @property RequestState $value
 * @property string $transition_reason
 */
class State extends Model
{
    /**
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return [
            'value' => RequestState::class,
        ];
    }
}
