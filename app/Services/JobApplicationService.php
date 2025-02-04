<?php

namespace App\Services;

use App\DTO\JobApplicationDto;
use App\Models\Vacancy;
use App\Repositories\JobApplicationRepository;
use Illuminate\Support\Facades\Log;

class JobApplicationService
{
    protected JobApplicationRepository $jobApplicationRepository;

    public function __construct(JobApplicationRepository $jobApplicationRepository)
    {
        $this->jobApplicationRepository = $jobApplicationRepository;
    }

    public function store(Vacancy $vacancy, JobApplicationDto $dto)
    {
        $this->jobApplicationRepository->store($vacancy, $dto);

        return redirect()->route('vacancies.show', $vacancy)
            ->with('success', 'Job application submitted');
    }
}
