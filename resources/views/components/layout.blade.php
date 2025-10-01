<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 text-2xl font-bold tracking-wide">
                    Job Listing
                </div>

                <!-- Nav Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="hover:text-indigo-400 {{ request()->is('/') ? 'text-indigo-400 font-semibold' : '' }}">
                        Home
                    </a>
                    <a href="/jobs" class="hover:text-indigo-400 {{ request()->is('jobs') ? 'text-indigo-400 font-semibold' : '' }}">
                        Jobs
                    </a>
                </div>

                <!-- Action Button -->
                <div>
                    <a href="/jobs/create" 
                       class="bg-indigo-600 hover:bg-indigo-500 px-4 py-2 rounded-lg font-medium shadow">
                        Create Job
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg p-6">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} Job Listing. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
