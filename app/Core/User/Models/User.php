<?php

namespace App\Core\User\Models;

use App\Core\Item\Models\Loan;
use App\Core\Item\Models\Stock;
use App\Core\Request\Models\Request;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property Illuminate\Database\Eloquent\Collection<Stock> $loans
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * @return BelongsToMany<Stock>
     */
    public function loans(): BelongsToMany
    {
        return $this->belongsToMany(Stock::class, Loan::class);
    }

    /**
     * @return HasMany<Request>
     */
    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }
}
