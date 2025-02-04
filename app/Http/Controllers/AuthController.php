<?php

namespace App\Http\Controllers;

use App\DTO\LoginDto;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('auth.create');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $dto = new LoginDto(
            $data['email'],
            $data['password']
        );

        return $this->authService->login($dto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
