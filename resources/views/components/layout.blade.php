<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold">
            My Site
        </div>
        <div class="space-x-6">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="p-6">
    <h1 class="text-2xl font-bold mb-4">
        {{ $heading }}
    </h1>

    {{ $slot }}
</main>

</body>
</html>
