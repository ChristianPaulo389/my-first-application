<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold">Create a New Job</h2>

                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Shift Leader" required>
                @error('title')
                    <p class="text-xs text-red-500">{{ $message }}</p>
                @enderror

                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" placeholder="$50,000 per year" required>
                @error('salary')
                    <p class="text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2">Save</button>
    </form>
</x-layout>
