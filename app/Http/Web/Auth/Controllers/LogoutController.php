<?php

namespace App\Http\Web\Auth\Controllers;

use App\Core\Auth\Actions\LogoutAction;
use Illuminate\Http\RedirectResponse;

final class LogoutController
{
    public function __invoke(): RedirectResponse
    {
        LogoutAction::execute();

        return redirect()->route('web.login');
    }
}
