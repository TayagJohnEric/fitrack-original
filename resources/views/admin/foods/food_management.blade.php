@extends('layouts.admin.app')
@section('title', 'Admin Dashboard - Food Management')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900">Food Management</h1>
            <p class="mt-2 text-md text-gray-600">Manage and organize your food-related content</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Food Items Card --}}
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                           <div class="text-xl font-medium">{{ $foodItemCount }}</div>
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
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full">
                           <div class="text-xl font-medium">{{ $foodSuggestionCount }}</div>
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
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                                                       <div class="text-xl font-medium">{{ $foodTemplateCount }}</div>

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
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-red-100 text-red-600 p-3 rounded-full">
                                                       <div class="text-xl font-medium">{{ $templateFoodItemCount }}</div>

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