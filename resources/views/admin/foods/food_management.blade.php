@extends('layouts.admin.app')
@section('title', 'Admin Dashboard - Food Management')
@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900">Food Management</h1>
            <p class="mt-2 text-md text-gray-600">Manage and organize your food-related content</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Food Items Card --}}
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <a href="{{ route('admin.food-items.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Manage
                        </a>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Food Items</h3>
                    <p class="text-gray-600 text-sm">View and edit your food inventory</p>
                </div>
            </div>

            {{-- Food Suggestions Card --}}
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <a href="{{ route('admin.food-suggestions.index') }}" class="text-green-600 hover:text-green-800 font-semibold">
                            Manage
                        </a>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Food Suggestions</h3>
                    <p class="text-gray-600 text-sm">Browse and categorize food recommendations</p>
                </div>
            </div>

            {{-- Food Templates Card --}}
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <a href="{{ route('admin.food-templates.index') }}" class="text-purple-600 hover:text-purple-800 font-semibold">
                            Manage
                        </a>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Food Templates</h3>
                    <p class="text-gray-600 text-sm">Create and manage food suggestion templates</p>
                </div>
            </div>

            {{-- Template Food Items Card --}}
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-red-100 text-red-600 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <a href="{{ route('admin.template-food-items.index') }}" class="text-red-600 hover:text-red-800 font-semibold">
                            Manage
                        </a>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Template Food Items</h3>
                    <p class="text-gray-600 text-sm">Manage template-specific food items</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection