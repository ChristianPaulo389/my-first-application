<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2 class="text-xl font-bold">{{ $job->title }}</h2>
    <p>Pays {{ $job->salary }} per year.</p>
    <p class="text-sm text-gray-500">Employer: {{ $job->employer->name }}</p>

    <div class="mt-4 flex gap-4">
        <a href="/jobs/{{ $job->id }}/edit" class="text-blue-600 hover:underline">Edit Job</a>
        <a href="/jobs" class="text-gray-600 hover:underline">← Back to Jobs</a>
    </div>
</x-layout>
