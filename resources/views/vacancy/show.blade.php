<x-layout>
    <x-breadcrumbs class="mb4"
    :links="['Vacancies' => route('vacancies.index'), $vacancy->title => '#']"/>
    <x-vacancy-card :$vacancy>
        <p class="card-description">
            {!! nl2br(e($vacancy->description)) !!}
        </p>
    </x-vacancy-card>

    <x-card class="mb4">
        <h2 class="company-name">
            More {{ $vacancy->employer->company_name }} Vacancies
        </h2>

        <div class="vacancy-font">
            @foreach($vacancy->employer->vacancies as $otherVacancy)
                <div class="vacancy-container">
                    <div>
                        <div class="vacancy-title">
                            <a href="{{ route('vacancies.show', $otherVacancy) }}">
                                {{ $otherVacancy->title }}
                            </a>
                         </div>
                        <div class="text-xs">
                            {{ $otherVacancy->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-xs">
                        {{ number_format($otherVacancy->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>

<style>
    .mb4 {
        margin-bottom: 1rem;
    }

    .card-description {
        font-size: 0.875rem;
        color: #64748b;
    }

    .company-name {
        margin-bottom: 1rem;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 500;
    }

    .vacancy-container {
        display: flex;
        margin-bottom: 1rem;
        justify-content: space-between;
    }

    .vacancy-title {
        color: rgb(51, 65, 85);
    }

    .vacancy-title a {
        text-decoration: none;
        color: inherit;
    }

    .text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
    }

    .vacancy-font {
        font-size: 0.875rem;
        line-height: 1.25rem;
        color: rgb(100, 116, 139);
    }

</style>
