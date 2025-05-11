@extends('layouts.admin.app')
@section('title', 'Admin Dashboard - Configuration')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Configuration Dashboard</h1>
            <p class="mt-2 text-lg text-gray-600">Manage system settings and configuration options.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Activity Levels Card -->
            <a href="{{ route('admin.activity-levels.index') }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">Activity Levels</h2>
                        <div class="bg-indigo-100 p-3 rounded-full text-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Manage activity level categories that users can select for their profiles.</p>
                    <div class="mt-4 flex items-center text-indigo-600 group-hover:translate-x-2 transition-transform duration-300">
                        <span class="text-sm font-medium">Manage settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Fitness Goals Card -->
            <a href="{{ route('admin.fitness-goals.index') }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">Fitness Goals</h2>
                        <div class="bg-green-100 p-3 rounded-full text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Configure available fitness goal options for users to choose from.</p>
                    <div class="mt-4 flex items-center text-indigo-600 group-hover:translate-x-2 transition-transform duration-300">
                        <span class="text-sm font-medium">Manage settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Experience Levels Card -->
            <a href="{{ route('admin.experience-levels.index') }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">Experience Levels</h2>
                        <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Manage experience level categories from beginner to advanced.</p>
                    <div class="mt-4 flex items-center text-indigo-600 group-hover:translate-x-2 transition-transform duration-300">
                        <span class="text-sm font-medium">Manage settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Workout Types Card -->
            <a href="{{ route('admin.workout-types.index') }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">Workout Types</h2>
                        <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Configure different types of workouts available in the system.</p>
                    <div class="mt-4 flex items-center text-indigo-600 group-hover:translate-x-2 transition-transform duration-300">
                        <span class="text-sm font-medium">Manage settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Allergies Card -->
            <a href="{{ route('admin.allergies.index') }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">Allergies</h2>
                        <div class="bg-red-100 p-3 rounded-full text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Manage food allergies and dietary restrictions for meal planning.</p>
                    <div class="mt-4 flex items-center text-indigo-600 group-hover:translate-x-2 transition-transform duration-300">
                        <span class="text-sm font-medium">Manage settings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Add more configuration cards here as needed -->
        </div>

        <div class="mt-12 bg-white rounded-lg shadow p-6">
            <div class="flex items-center mb-4">
                <div class="bg-indigo-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="ml-3 text-lg font-medium text-gray-800">Need Help?</h2>
            </div>
            <p class="text-gray-600">
                Need assistance managing these configuration settings? Check out our 
                <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">admin documentation</a> 
                or contact the system administrator for help.
            </p>
        </div>
    </div>
</div>
@endsection