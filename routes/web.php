<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('vacancies.index'));

Route::get('vacancies', [VacancyController::class, 'index'])
    ->name('vacancies.index');

Route::get('vacancies/{vacancy}', [VacancyController::class, 'show'])
    ->name('vacancies.show');

Route::get('login', fn() => to_route('auth.create'))
    ->name('login');

Route::get('auth/create', [AuthController::class, 'create'])
    ->name('auth.create');

Route::get('auth/store', [AuthController::class, 'store'])
    ->name('auth.store');
