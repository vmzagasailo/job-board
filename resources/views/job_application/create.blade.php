<x-layout>
    <x-breadcrumbs class="mb4"
                   :links="['Vacancies' => route('vacancies.index'),
                    $vacancy->title => route('vacancies.show', $vacancy),
                    'Apply ' => '#']"/>

    <x-vacancy-card :$vacancy />

    <x-card>
        <h2 class="title-apply-text">
            Your Job Application
        </h2>
        <form action="{{ route('vacancy.application.store', $vacancy) }}" method="POST">
            @csrf
            <div style="margin-bottom: 1rem">
                <label for="expected_salary"
                       class="expected-salary-container">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />
            </div>
            <button class="apply-button">Apply</button>
        </form>
    </x-card>
</x-layout>

<style>
    .title-apply-text {
        margin-bottom: 1rem;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 500;
    }

    .expected-salary-container {
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
        color: rgb(15, 23, 42);
    }

    .apply-button {
        width: 100%;
        background-color: white;
        border: 1px solid grey;
        border-radius: 0.375rem;
        padding: 0.45rem;
        font-weight: 700;
    }
</style>
