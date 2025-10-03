{{-- File: resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- The title will be dynamically set by child pages, with a default fallback -->
    <title>@yield('title', 'Event Platform')</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vite directive to include compiled CSS and JS assets -->
    {{-- This is Laravel's magic wand for frontend assets. In development, it handles --}}
    {{-- Hot Module Replacement. In production, it links to the compiled, versioned files. --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased">
    
    <!-- Main Navigation Bar -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 lg:px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 text-2xl font-bold text-gray-800">
                    <i class="bi bi-calendar-heart text-indigo-600"></i>
                    <span>Eventify</span>
                </a>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Browse Events</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">For Organizers</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Help</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-2">
                    <a href="#" class="hidden sm:inline-block text-gray-600 hover:text-indigo-600 font-medium px-4 py-2 rounded-md transition-colors">Log In</a>
                    <a href="#" class="bg-indigo-600 text-white font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition-all shadow-sm">Sign Up</a>
                    <button class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100">
                         <i class="bi bi-list text-2xl"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Area -->
    {{-- The @yield directive is a placeholder. Any child view that extends this layout --}}
    {{-- can inject its content into this 'content' section. --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 lg:px-6 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-3">Eventify</h3>
                    <p class="text-gray-500 text-sm">Your one-stop platform for discovering and hosting amazing events.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-3">Find Events</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Music</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Tech</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Arts & Culture</a></li>
                    </ul>
                </div>
                 <div>
                    <h3 class="font-semibold text-gray-700 mb-3">For Organizers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Create Event</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Pricing</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-indigo-600 text-sm">Dashboard</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-3">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="bi bi-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="bi bi-facebook text-xl"></i></a>
                        <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="bi bi-instagram text-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-6 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} Eventify. All rights reserved.
            </div>
        </div>
    </footer>


    <!-- Placeholder for page-specific JavaScript files -->
    @stack('scripts')
</body>
</html>

