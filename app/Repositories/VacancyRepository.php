<?php

namespace App\Repositories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

class VacancyRepository
{
    public function getFilteredVacancies(
        ?string $search = null,
        ?int $minSalary = null,
        ?int $maxSalary = null,
        ?string $experience = null,
        ?string $category = null
    ): Collection
    {
        return Vacancy::query()
            ->when(request('search'), function ($query) use ($search) {
                $query->where(function ($query) use($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            })->when($minSalary, function ($query) use ($minSalary){
                $query->where('salary', '>=', $minSalary);
            })->when($minSalary, function ($query) use ($maxSalary){
                $query->where('salary', '<=', $maxSalary);
            })->when($experience, function ($query) use ($experience) {
                $query->where('experience', $experience);
            })->when($category, function ($query) use ($category) {
                $query->where('category', $category);
            })
            ->get();
    }
}
