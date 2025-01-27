<?php

namespace App\Services;

use App\Repositories\VacancyRepository;
use Illuminate\Database\Eloquent\Collection;

class VacancyService
{
    protected VacancyRepository $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }
    public function getVacanciesWithFilter(
        ?string $search = null,
        ?int $minSalary = null,
        ?int $maxSalary = null
    ): Collection
    {
        return $this->vacancyRepository->getFilteredVacancies($search, $minSalary, $maxSalary);
    }
}
