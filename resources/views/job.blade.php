<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>

    <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>

    <div class="mt-4">
        @foreach($job->tags as $tag)
            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                {{ $tag->name }}
            </span>
        @endforeach
    </div>
</x-layout>
