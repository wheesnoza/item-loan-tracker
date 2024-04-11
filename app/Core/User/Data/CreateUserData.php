<?php

namespace App\Core\User\Data;

use App\Core\Shared\Data\Data;

final class CreateUserData extends Data
{
    public function __construct(
        public readonly string $email,
    ) {
    }
}
