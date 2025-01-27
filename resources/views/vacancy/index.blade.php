<x-layout>
    <x-breadcrumbs class="mb"
                   :links="['Vacancies' => route('vacancies.index')]"/>
    <x-card class="x-card">
        <div class="custom-grid-filter">
            <div>
                <div class="input-filter">Search</div>
                <x-text-input name="search" value="" placeholder="Search for any text"/>
            </div>
            <div>
                <div class="input-filter">Salary</div>
                <div class="flex space-x-2">
                    <x-text-input name="min_salary" value="" placeholder="From"/>
                    <x-text-input name="max_salary" value="" placeholder="To"/>
                </div>
            </div>
            <div>3</div>
            <div>4</div>
        </div>
    </x-card>

    @foreach($vacancies as $vacancy)
        <x-vacancy-card :$vacancy>
            <div>
                <x-link-button :href="route('vacancies.show', $vacancy)">
                    Show
                </x-link-button>
            </div>
        </x-vacancy-card>
    @endforeach
</x-layout>

<style>
    .x-card {
        margin-bottom: 1rem;
        font-size: 0.875rem;
    }

    .custom-grid-filter {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .input-filter {
        margin-bottom: 0.25rem;
        font-weight: 600;
    }

</style>
