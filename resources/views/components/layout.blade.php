<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Site' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-full">
        <!-- Navbar -->
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 text-white font-bold">
                            My Site
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>

        <!-- Main content -->
        <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">{{ $heading }}</h1>
        <div class="px-4 py-6 sm:px-0 flex flex-col items-center justify-center">
            {{ $slot }}
        </div>
    </div>
</main>
    </div>
</body>
</html>
