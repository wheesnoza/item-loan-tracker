<?php

use App\Core\User\Actions\CreateUserAction;
use App\Core\User\Data\CreateUserData;
use App\Core\User\Models\User;

use function Pest\Laravel\assertDatabaseHas;
use function PHPUnit\Framework\assertInstanceOf;

it('should create a user using create user action.', function () {
    $data = new CreateUserData(fake()->email());

    $user = CreateUserAction::execute($data);

    assertInstanceOf(User::class, $user);

    assertDatabaseHas(User::class, $data->toArray());
});
