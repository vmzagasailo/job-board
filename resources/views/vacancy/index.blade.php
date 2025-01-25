<x-layout>
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
