<?php

namespace App\DTO;

readonly class JobApplicationDto
{
    public function __construct(
        public float $expectedSalary,
        public int $userId
    )
    {
    }
}
