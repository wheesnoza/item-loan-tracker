<?php

namespace App\Core\Auth\Data;

use App\Core\Shared\Data\Data;

final class CredentialsData extends Data
{
    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {
    }
}
