<?php

namespace App\Core\Notification\Models;

use App\Core\Notification\Enums\NotificationCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property NotificationCategory $category
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Notification extends Model
{
    /**
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return [
            'content' => 'json',
        ];
    }
}
