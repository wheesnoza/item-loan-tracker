<?php

namespace App\Core\Item\Models;

use App\Core\Item\Enums\ItemCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property ItemCategory $category
 * @property Illuminate\Support\Carbon $created_at
 * @property Illuminate\Support\Carbon $updated_at
 * @property Collection<Stock> $stocks
 * @property Collection<Loan> $loans
 */
class Item extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'category',
    ];

    /**
     * @return HasMany<Stock>
     */
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    /**
     * @return HasManyThrough<Loan>
     */
    public function loans(): HasManyThrough
    {
        return $this->hasManyThrough(Loan::class, Stock::class);
    }

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
