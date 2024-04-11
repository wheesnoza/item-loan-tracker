<?php

use App\Core\User\Models\User;
use Database\Factories\UserFactory;

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;
use function Pest\Laravel\from;
use function Pest\Laravel\post;

it('user can login using correct credentials.', function () {
    /** @var User $user */
    $user = UserFactory::new()->create();

    post(route('web.login'), [
        'email' => $user->email,
        'password' => 'password',
    ])
        ->assertRedirectToRoute('web.home');

    assertAuthenticated();
});

it('user can not login using incorrect credentials.', function () {
    UserFactory::new()->create();

    from(route('web.login'))->post(route('web.login'), [
        'email' => fake()->email(),
        'password' => fake()->password(),
    ])
        ->assertRedirectToRoute('web.login');

    assertGuest();
});
