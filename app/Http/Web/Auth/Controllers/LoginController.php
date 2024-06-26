<?php

namespace App\Http\Web\Auth\Controllers;

use App\Core\Auth\Actions\AttemptLoginAction;
use App\Http\Web\Auth\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

final class LoginController
{
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        $authenticated = AttemptLoginAction::execute($request->credentials());

        if ($authenticated) {
            return redirect()->intended(route('web.home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
