<?php

namespace App\Repositories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class VacancyRepository
{
    public function getFilteredVacancies(
        ?string $search = null,
        ?int $minSalary = null,
        ?int $maxSalary = null
    ): Collection
    {
        return Vacancy::query()
            ->when(request('search'), function ($query) use ($search){
                $query->where(function ($query) use($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
        })->when($minSalary, function ($query) use ($minSalary){
                $query->where('salary', '>=', $minSalary);
            })
            ->when($minSalary, function ($query) use ($maxSalary){
                $query->where('salary', '<=', $maxSalary);
            })
            ->get();
    }
}
