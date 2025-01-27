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
    public function getVacanciesWithSearch( ?string $search = null): Collection
    {
        return $this->vacancyRepository->getVacancies($search);
    }
}
