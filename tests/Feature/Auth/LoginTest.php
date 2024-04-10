<?php

use App\Core\User\Models\User;
use Database\Factories\UserFactory;

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\post;

it('user can login', function () {
    /** @var User $user */
    $user = UserFactory::new()->create();

    post(route('web.login'), [
        'email' => $user->email,
        'password' => 'password',
    ]
    )->assertRedirectToRoute('web.home');

    assertAuthenticated();
});
