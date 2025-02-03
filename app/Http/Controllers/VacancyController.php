<?php

namespace App\Http\Controllers;

use App\DTO\VacancyDTO;
use App\Models\Vacancy;
use App\Services\VacancyService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VacancyController extends Controller
{
    protected VacancyService $vacancyService;

    public function __construct(VacancyService $vacancyService)
    {
        $this->vacancyService = $vacancyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $vacancyDTO = new VacancyDTO(
            search: request('search'),
            minSalary: request('min_salary'),
            maxSalary: request('max_salary'),
            experience: request('experience'),
            category: request('category'),
        );

        $vacancies = $this->vacancyService
            ->getVacanciesWithFilter(
                $vacancyDTO
            );

        return view('vacancy.index', ['vacancies' => $vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy): Factory|View|Application
    {
        return view(
            'vacancy.show',
            ['vacancy' => $vacancy->load('employer.vacancies')]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
