<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1 class="text-3xl">Hello from the Jobs page</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}: <strong>${{ $job['salary'] }}</strong> per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
