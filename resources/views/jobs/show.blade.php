<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <h2>{{ $job->title }}</h2>
    <p class="font-bold text-lg">
        This Job pays ${{ $job->salary }} per year.
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>

</x-layout>
