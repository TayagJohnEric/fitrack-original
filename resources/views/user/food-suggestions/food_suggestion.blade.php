@extends('layouts.user.app')
@section('title', 'Food Suggestions')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Food Suggestions</h1>
            <p class="mt-1 text-sm text-gray-500">Discover personalized meal ideas tailored to your fitness goals</p>
        </div>

        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px space-x-8">
                <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Browse Suggestions
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    My Saved Suggestions
                </a>
            </nav>
        </div>

        <!-- Filters Section -->
        <div class="mt-6 bg-white shadow-md overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Filters</h3>
                <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Meal Type Filter -->
                    <div>
                        <label for="meal-type" class="block text-sm font-medium text-gray-700">Meal Type</label>
                        <select id="meal-type" name="meal-type" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">All Types</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Snack">Snack</option>
                        </select>
                    </div>

                    <!-- Category Filter -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">All Categories</option>
                            <option value="High Protein">High Protein</option>
                            <option value="Low Carb">Low Carb</option>
                            <option value="Vegetarian">Vegetarian</option>
                            <option value="Weight Loss">Weight Loss</option>
                        </select>
                    </div>

                    <!-- Protein Range Filter -->
                    <div>
                        <label for="protein-range" class="block text-sm font-medium text-gray-700">Protein (g)</label>
                        <div class="mt-1 flex space-x-2">
                            <input type="number" min="0" id="protein-min" placeholder="Min" class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            <input type="number" min="0" id="protein-max" placeholder="Max" class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <!-- Calorie Range Filter -->
                    <div>
                        <label for="calorie-range" class="block text-sm font-medium text-gray-700">Calories</label>
                        <div class="mt-1 flex space-x-2">
                            <input type="number" min="0" id="calorie-min" placeholder="Min" class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            <input type="number" min="0" id="calorie-max" placeholder="Max" class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Food Suggestions Grid -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Personalized Suggestions</h2>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Food Suggestion Card 1 -->
                <div class="bg-white overflow-hidden shadow-md rounded-lg divide-y divide-gray-200">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">High Protein Breakfast Bowl</h3>
                            <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">Breakfast</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">A balanced breakfast with high protein content to start your day right.</p>
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        <!-- Nutritional Info -->
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">450</span>
                                <span>Calories</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">35g</span>
                                <span>Protein</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">45g</span>
                                <span>Carbs</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">12g</span>
                                <span>Fat</span>
                            </div>
                        </div>
                        
                        <!-- Food Items List -->
                        <h4 class="font-medium text-gray-900 mb-2">Ingredients:</h4>
                        <ul class="text-sm text-gray-600 mb-4 space-y-1">
                            <li class="flex justify-between">
                                <span>Greek Yogurt</span>
                                <span>1 cup</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Granola</span>
                                <span>1/2 cup</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Banana</span>
                                <span>1 medium</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Chia Seeds</span>
                                <span>1 tbsp</span>
                            </li>
                        </ul>

                        <!-- Alternative Options -->
                        <div class="mb-4">
                            <h4 class="font-medium text-gray-900 mb-2">Alternatives:</h4>
                            <div class="flex flex-wrap gap-2">
                                <div>
                                    <span class="text-xs font-medium text-gray-500">Instead of Greek Yogurt:</span>
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Cottage Cheese</span>
                                        <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Protein Powder Mix</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <button type="button" class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add to Today's Log
                            </button>
                            <button type="button" class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save to Favorites
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Food Suggestion Card 2 -->
                <div class="bg-white overflow-hidden shadow-md rounded-lg divide-y divide-gray-200">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">Energy-Boosting Lunch Plate</h3>
                            <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">Lunch</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">A nutrient-dense lunch option to fuel your afternoon workouts.</p>
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        <!-- Nutritional Info -->
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">620</span>
                                <span>Calories</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">40g</span>
                                <span>Protein</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">55g</span>
                                <span>Carbs</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-gray-900">22g</span>
                                <span>Fat</span>
                            </div>
                        </div>
                        
                        <!-- Food Items List -->
                        <h4 class="font-medium text-gray-900 mb-2">Ingredients:</h4>
                        <ul class="text-sm text-gray-600 mb-4 space-y-1">
                            <li class="flex justify-between">
                                <span>Grilled Chicken Breast</span>
                                <span>5 oz</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Brown Rice</span>
                                <span>1 cup</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Steamed Broccoli</span>
                                <span>1 cup</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Avocado</span>
                                <span>1/4 medium</span>
                            </li>
                        </ul>

                        <!-- Alternative Options -->
                        <div class="mb-4">
                            <h4 class="font-medium text-gray-900 mb-2">Alternatives:</h4>
                            <div class="flex flex-wrap gap-2">
                                <div>
                                    <span class="text-xs font-medium text-gray-500">Instead of Chicken Breast:</span>
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Tofu</span>
                                        <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Salmon</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <button type="button" class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add to Today's Log
                            </button>
                            <button type="button" class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save to Favorites
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination Section -->
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-8">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">2</span> of <span class="font-medium">18</span> results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                1
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                2
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                3
                            </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                ...
                            </span>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                8
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Saved Suggestions Section (hidden by default) -->
        <div class="mt-8 hidden">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">My Saved Suggestions</h2>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    <li>
                        <div class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <p class="text-sm font-medium text-indigo-600 truncate">High Protein Breakfast Bowl</p>
                                        <span class="ml-2 inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">Breakfast</span>
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <button type="button" class="mr-2 inline-flex items-center px-2.5 py-1.5 border border-gray-300 text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Rename
                                        </button>
                                        <button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            Saved on Apr 15, 2025
                                        </p>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                        <p>
                                            Last used on May 10, 2025
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection