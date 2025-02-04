<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('vacancies.index'));

Route::get('vacancies', [VacancyController::class, 'index'])
    ->name('vacancies.index');

Route::get('vacancies/{vacancy}', [VacancyController::class, 'show'])
    ->name('vacancies.show');

Route::get('auth/create', [AuthController::class, 'create'])
    ->name('auth.create');

Route::post('auth/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::delete('auth/logout', [AuthController::class, 'logout'])
    ->name('auth.logout');
