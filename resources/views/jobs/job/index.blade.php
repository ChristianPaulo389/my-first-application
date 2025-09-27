<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>
    @foreach($jobs as $job)
    <p>{{ $job->title }} — {{ $job->employer->name ?? 'No Employer' }}</p>
@endforeach

{{ $jobs->links() }}
</x-layout>
