<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="mb-4">
            <label for="title" class="block font-semibold">Title</label>
            <input type="text" name="title" id="title"
                   class="w-full border rounded px-3 py-2"
                   placeholder="Shift Leader" required>
            @error('title')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="salary" class="block font-semibold">Salary</label>
            <input type="text" name="salary" id="salary"
                   class="w-full border rounded px-3 py-2"
                   placeholder="$50,000 Per Year" required>
            @error('salary')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-4">
            <a href="/jobs" class="text-gray-600">Cancel</a>
            <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">
                Save
            </button>
        </div>
    </form>
</x-layout>
