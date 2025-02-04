<?php

namespace App\Repositories;

use App\DTO\JobApplicationDto;
use App\Models\Vacancy;

class JobApplicationRepository
{
    public function store(Vacancy $vacancy, JobApplicationDto $dto)
    {
        return $vacancy->jobApplications()->create([
            'user_id' => $dto->userId,
            'expected_salary' => $dto->expectedSalary,
        ]);
    }
}
