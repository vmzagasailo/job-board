<?php

namespace App\Http\Controllers;

use App\DTO\JobApplicationDto;
use App\Http\Requests\JobApplication\JobApplicationRequest;
use App\Models\Vacancy;
use App\Services\JobApplicationService;

class JobApplicationController extends Controller
{
    protected JobApplicationService $jobApplicationService;

    public function __construct(JobApplicationService $jobApplicationService)
    {
        $this->jobApplicationService = $jobApplicationService;
    }

    public function create(Vacancy $vacancy)
    {
        return view('job_application.create', ['vacancy' => $vacancy]);
    }

    public function store(Vacancy $vacancy, JobApplicationRequest $request)
    {
        $data = $request->validated();

        $dto = new JobApplicationDto(
            $data['expected_salary'],
            request()->user()->id
        );

        return $this->jobApplicationService->store($vacancy, $dto);
    }
}
