<?php

namespace App\Repositories;

use App\DTO\VacancyDTO;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

class VacancyRepository
{
    public function getFilteredVacancies(VacancyDTO $vacancyDTO): Collection
    {
        $query = Vacancy::with('employer');

        if ($vacancyDTO->search) {
            $searchTerm = '%' . $vacancyDTO->search . '%';
            $query->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', $searchTerm)
                    ->orWhere('description', 'like', $searchTerm)
                    ->orWhereHas('employer', function ($query) use ($searchTerm) {
                        $query->where('company_name', 'like', $searchTerm);
                    });
            });
        }

        if ($vacancyDTO->minSalary) {
            $query->where('salary', '>=', $vacancyDTO->minSalary);
        }

        if ($vacancyDTO->maxSalary) {
            $query->where('salary', '<=', $vacancyDTO->maxSalary);
        }

        if ($vacancyDTO->experience) {
            $query->where('experience', $vacancyDTO->experience);
        }

        if ($vacancyDTO->category) {
            $query->where('category', $vacancyDTO->category);
        }

        return $query->get();
    }

}
