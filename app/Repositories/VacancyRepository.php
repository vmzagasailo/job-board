<?php

namespace App\Repositories;

use App\DTO\VacancyDTO;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

class VacancyRepository
{
    public function getFilteredVacancies(VacancyDTO $vacancyDTO): Collection
    {
        return Vacancy::query()
            ->when($vacancyDTO->search, function ($query) use ($vacancyDTO) {
                $query->where(function ($query) use ($vacancyDTO) {
                    $query->where('title', 'like', '%' . $vacancyDTO->search . '%')
                        ->orWhere('description', 'like', '%' . $vacancyDTO->search . '%');
                });
            })
            ->when($vacancyDTO->minSalary, function ($query) use ($vacancyDTO) {
                $query->where('salary', '>=', $vacancyDTO->minSalary);
            })
            ->when($vacancyDTO->maxSalary, function ($query) use ($vacancyDTO) {
                $query->where('salary', '<=', $vacancyDTO->maxSalary);
            })
            ->when($vacancyDTO->experience, function ($query) use ($vacancyDTO) {
                $query->where('experience', $vacancyDTO->experience);
            })
            ->when($vacancyDTO->category, function ($query) use ($vacancyDTO) {
                $query->where('category', $vacancyDTO->category);
            })
            ->get();
    }
}
