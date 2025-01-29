<?php

namespace App\DTO;

readonly class VacancyDTO
{
    public function __construct(
        public ?string $search,
        public ?string $minSalary,
        public ?string $maxSalary,
        public ?string $experience,
        public ?string $category,
    )
    {
    }
}
