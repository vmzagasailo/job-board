<?php

namespace App\Repositories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

class VacancyRepository
{
    public function getVacancies(?string $search = null): Collection
    {
        return Vacancy::query()
            ->when(request('search'), function ($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
        })->get();
    }
}
