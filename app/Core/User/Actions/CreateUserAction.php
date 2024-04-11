<?php

namespace App\Core\User\Actions;

use App\Core\User\Data\CreateUserData;
use App\Core\User\Models\User;

final class CreateUserAction
{
    public static function execute(CreateUserData $data): User
    {
        /** @var User $user */
        $user = User::query()->create($data->toArray());

        return $user;
    }
}
