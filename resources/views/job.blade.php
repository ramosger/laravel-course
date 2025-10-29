<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>
    <p class="font-bold text-lg">
        This Job pays ${{ $job['salary'] }} per year.
    </p>

</x-layout>
