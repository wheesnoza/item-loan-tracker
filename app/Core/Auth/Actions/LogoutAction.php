<?php

namespace App\Core\Auth\Actions;

use Illuminate\Support\Facades\Auth;

final class LogoutAction
{
    public static function execute(): void
    {
        Auth::logout();
        Auth::getSession()->invalidate();
        Auth::getSession()->regenerateToken();
    }
}
