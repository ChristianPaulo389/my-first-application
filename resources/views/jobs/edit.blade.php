<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="title" class="block font-semibold">Title</label>
            <input type="text" name="title" id="title"
                   value="{{ $job->title }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('title')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="salary" class="block font-semibold">Salary</label>
            <input type="text" name="salary" id="salary"
                   value="{{ $job->salary }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('salary')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between">
            <button form="delete-form" class="text-red-500">Delete</button>
            <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                Update
            </button>
        </div>
    </form>

    <!-- Hidden Delete Form -->
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
