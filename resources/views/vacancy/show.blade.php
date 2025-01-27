<x-layout>
    <x-breadcrumbs class="mb"
    :links="['Vacancies' => route('vacancies.index'), $vacancy->title => '#']"/>
    <x-vacancy-card :$vacancy>
        <p class="card-description">
            {!! nl2br(e($vacancy->description)) !!}
        </p>
    </x-vacancy-card>
</x-layout>

<style>
    .mb {
        margin-bottom: 1rem;
    }

    .card-description {
        font-size: 0.875rem;
        color: #64748b;
    }
</style>
