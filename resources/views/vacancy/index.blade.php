<x-layout>
    @foreach($vacancies as $vacancy)
        <x-card>
            {{ $vacancy->title }}
        </x-card>
    @endforeach
</x-layout>
