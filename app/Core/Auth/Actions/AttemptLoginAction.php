<?php

namespace App\Core\Auth\Actions;

use App\Core\Auth\Data\CredentialsData;
use Illuminate\Support\Facades\Auth;

final class AttemptLoginAction
{
    public static function execute(CredentialsData $credentials): bool
    {
        if (Auth::attempt($credentials->toArray())) {
            Auth::getSession()->regenerate();

            return true;
        }

        return false;
    }
}
