<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $job->title }}" required>
        @error('title')
            <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror

        <label for="salary">Salary</label>
        <input type="text" name="salary" value="{{ $job->salary }}" required>
        @error('salary')
            <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2">Update</button>
        <button form="delete-form" class="text-red-500">Delete</button>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
