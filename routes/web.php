<?php

use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;
Route::get('/', fn() => to_route('vacancies.index'));
Route::get('vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
