<x-layout>
    <x-breadcrumbs class="mb"
                   :links="['Vacancies' => route('vacancies.index')]"/>
    <x-card class="x-card">
        <form action="{{ route('vacancies.index') }}">
            <div class="custom-grid-filter">
                <div>
                    <div class="input-filter">Search</div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text"/>
                </div>
                <div>
                    <div class="input-filter">Salary</div>
                    <div class="flex-salary space-salary">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From"/>
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To"/>
                    </div>
                </div>
                <div>
                    <div class="input-filter">Experience</div>
                    <x-radio-group
                        name="experience"
                        :options="array_combine(array_map('ucfirst',\App\Models\Vacancy::$experience),\App\Models\Vacancy::$experience)" />

                </div>
                <div><div class="input-filter">Category</div>
                    <x-radio-group
                        name="category"
                        :options="\App\Models\Vacancy::$category" /></div>
            </div>

            <button class="submit-button">
                Filter
            </button>

        </form>
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

    .flex-salary {
        display: flex;
    }

    .space-salary > :not([hidden]) ~ :not([hidden]) {
        margin-left: 0.5rem;
    }

    .submit-button {
        width: 100%;
        border: 2px solid #3B82F6;
        border-radius: 6px;
    }

</style>
