{{-- File: resources/views/welcome.blade.php --}}
{{-- This line tells Laravel to use the layout file we created at 'resources/views/layouts/app.blade.php' --}}
@extends('layouts.app')

{{-- This section will replace the @yield('title') in the layout file --}}
@section('title', 'Eventify - Discover & Host Amazing Events')

{{-- This section will replace the @yield('content') in the layout file --}}
@section('content')

    <!-- Hero Section -->
    <div class="relative bg-white pt-16 pb-20 lg:pt-24 lg:pb-28">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight tracking-tight">
                    Discover Events That <span class="text-indigo-600">Inspire</span> You
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600">
                    From local workshops to global conferences, find your next unforgettable experience or create your own with our seamless platform.
                </p>
                <div class="mt-8 flex justify-center gap-4 flex-wrap">
                    <a href="#" class="inline-block bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-indigo-700 transform hover:-translate-y-1 transition-all">
                        Find Your Next Event
                    </a>
                    {{-- The link for this button now changes based on authentication status.
                         Guests are sent to the registration page.
                         Authenticated users will eventually be sent to the create event page. --}}
                    @guest
                        <a href="{{ route('register') }}" class="inline-block bg-white text-gray-700 font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-gray-100 ring-1 ring-gray-200 transform hover:-translate-y-1 transition-all">
                            Create an Event
                        </a>
                    @else
                         <a href="#" class="inline-block bg-white text-gray-700 font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-gray-100 ring-1 ring-gray-200 transform hover:-translate-y-1 transition-all">
                            Create an Event
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="bg-white py-20">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Browse by Category</h2>
                <p class="mt-4 text-lg text-gray-600">Explore events by what you love.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Category Card: Music -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-indigo-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-indigo-200 text-indigo-700 rounded-full mb-4">
                        <i class="bi bi-music-note-beamed text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Music</h3>
                </a>
                <!-- Category Card: Tech -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-pink-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-pink-200 text-pink-700 rounded-full mb-4">
                        <i class="bi bi-laptop text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Tech</h3>
                </a>
                <!-- Category Card: Business -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-sky-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-sky-200 text-sky-700 rounded-full mb-4">
                        <i class="bi bi-briefcase text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Business</h3>
                </a>
                <!-- Category Card: Food & Drink -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-amber-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-amber-200 text-amber-700 rounded-full mb-4">
                        <i class="bi bi-cup-straw text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Food & Drink</h3>
                </a>
                <!-- Category Card: Health -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-teal-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-teal-200 text-teal-700 rounded-full mb-4">
                        <i class="bi bi-heart-pulse text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Health</h3>
                </a>
                <!-- Category Card: Arts -->
                <a href="#" class="group text-center p-6 bg-gray-50 rounded-xl hover:bg-purple-100 hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                    <div class="inline-block p-4 bg-purple-200 text-purple-700 rounded-full mb-4">
                        <i class="bi bi-palette text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800">Arts</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Events Section -->
    <div class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Featured Events</h2>
                <p class="mt-4 text-lg text-gray-600">Hand-picked events you won't want to miss.</p>
            </div>

            <!-- Events Grid -->
            <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
                
                <!-- Sample Event Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/6366f1/ffffff?text=Tech+Conference" alt="Tech Conference">
                        <div class="absolute top-4 left-4 bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-1 rounded-full">TECH</div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-1"><i class="bi bi-calendar-check mr-1"></i> Oct 25, 2025</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors">Future of Web Development</h3>
                        <p class="text-gray-600 text-sm mb-4">Join industry leaders to discuss the latest trends in web technologies.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="bi bi-geo-alt-fill mr-2"></i>
                            <span>Online & In-Person</span>
                        </div>
                    </div>
                    <div class="px-6 pb-4 border-t border-gray-100 pt-4">
                         <a href="#" class="w-full text-center bg-indigo-50 text-indigo-700 font-semibold px-4 py-2 rounded-md hover:bg-indigo-100 transition-all">View Details</a>
                    </div>
                </div>

                <!-- Sample Event Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/ec4899/ffffff?text=Music+Festival" alt="Music Festival">
                         <div class="absolute top-4 left-4 bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-1 rounded-full">MUSIC</div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-1"><i class="bi bi-calendar-check mr-1"></i> Nov 12-14, 2025</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors">Starlight Music Festival</h3>
                        <p class="text-gray-600 text-sm mb-4">Three days of incredible live music under the stars. Don't miss out!</p>
                        <div class="flex items-center text-sm text-gray-500">
                           <i class="bi bi-geo-alt-fill mr-2"></i>
                            <span>Green Valley Park</span>
                        </div>
                    </div>
                     <div class="px-6 pb-4 border-t border-gray-100 pt-4">
                         <a href="#" class="w-full text-center bg-indigo-50 text-indigo-700 font-semibold px-4 py-2 rounded-md hover:bg-indigo-100 transition-all">Get Tickets</a>
                    </div>
                </div>

                <!-- Sample Event Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/f59e0b/ffffff?text=Art+Workshop" alt="Art Workshop">
                        <div class="absolute top-4 left-4 bg-amber-100 text-amber-800 text-xs font-semibold px-2.5 py-1 rounded-full">ART</div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-1"><i class="bi bi-calendar-check mr-1"></i> Every Saturday</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors">Abstract Painting Workshop</h3>
                        <p class="text-gray-600 text-sm mb-4">Unleash your creativity in our guided weekly painting sessions.</p>
                         <div class="flex items-center text-sm text-gray-500">
                           <i class="bi bi-geo-alt-fill mr-2"></i>
                            <span>Downtown Art Studio</span>
                        </div>
                    </div>
                     <div class="px-6 pb-4 border-t border-gray-100 pt-4">
                         <a href="#" class="w-full text-center bg-indigo-50 text-indigo-700 font-semibold px-4 py-2 rounded-md hover:bg-indigo-100 transition-all">Reserve Spot</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

