<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="space-y-4">
    @foreach ($jobs as $job)
        <li class="border rounded p-4">
            <a href="/jobs/{{ $job['id'] }}" class="block hover:bg-gray-50">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong> — Pays {{ $job['salary'] }} per year
                </div>
            </a>

            <div class="mt-2">
                @foreach($job->tags as $tag)
                    <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                        {{ $tag->name }}
                    </span>
                @endforeach
            </div>
        </li>
    @endforeach
</ul>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>


</x-layout>
