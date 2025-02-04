<?php

namespace App\Services;

use App\DTO\LoginDto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthService
{
    public function login(LoginDto $dto): RedirectResponse
    {
        $credentials = [
            'email' => $dto->email,
            'password' => $dto->password
        ];

        if (Auth::attempt($credentials, $dto->remember)) {
            return redirect()->intended();
        } else {
            return redirect()->back()
                ->with('error', 'Invalid credentials');
        }
    }
}
