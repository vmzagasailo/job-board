<?php

use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
