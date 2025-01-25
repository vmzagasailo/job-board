<x-layout>
    <x-breadcrumbs class="mb"
    :links="['Vacancies' => route('vacancies.index'), $vacancy->title => '#']"/>
    <x-vacancy-card :$vacancy/>
</x-layout>

<style>
    .mb {
        margin-bottom: 1rem;
    }
</style>
