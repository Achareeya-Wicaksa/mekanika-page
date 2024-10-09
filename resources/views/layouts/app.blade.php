<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-6">
                <!-- Placeholder for Logo -->
                <div class="bg-gray-700 w-full h-12 mb-8"></div>
                <nav>
                    <a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Dashboard</a>
                    <a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Master Data</a>
                    <ul class="pl-4">
                        <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Access Level</a></li>
                        <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Users</a></li>
                        <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Machines</a></li>
                        <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded bg-gray-700">Models</a></li>
                        <li><a href="#" class="block py-2 px-4 text-white hover:bg-gray-700 rounded">Parts</a></li>
                    </ul>
                    <!-- Placeholder for More Sidebar Links -->
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-900">Master Data</h1>
                </div>
            </header>
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <!-- Content here -->
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>
