<?php

namespace App\Services;

use App\DTO\VacancyDTO;
use App\Repositories\VacancyRepository;
use Illuminate\Database\Eloquent\Collection;

class VacancyService
{
    protected VacancyRepository $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }
    public function getVacanciesWithFilter(VacancyDTO $vacancyDTO): Collection
    {
        return $this->vacancyRepository->getFilteredVacancies($vacancyDTO);
    }
}
