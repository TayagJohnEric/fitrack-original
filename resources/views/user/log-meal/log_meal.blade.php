@extends('layouts.user.app')
@section('title', 'Log Meal')
@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Log Meal</h1>
            <p class="mt-1 text-sm text-gray-500">Track your meals and nutritional intake</p>
        </div>
        
        <!-- Main content wrapper -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!--route('meal-logs.store') -->
            <form action="#" method="POST">
                @csrf
                
                <!-- Date and meal type selectors -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="meal-date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input 
                            type="date" 
                            id="meal-date" 
                            name="log_date"
                            value="{{ date('Y-m-d') }}"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        >
                    </div>
                    <div>
                        <label for="meal-type" class="block text-sm font-medium text-gray-700 mb-1">Meal Type</label>
                        <select 
                            id="meal-type" 
                            name="meal_type"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        >
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Snack">Snack</option>
                        </select>
                    </div>
                </div>
                
                <!-- Food search and add section -->
                <div class="border rounded-lg p-4 mb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Add Food Items</h2>
                    
                    <!-- Tabs for different ways to add food -->
                    <div class="border-b border-gray-200">
                        <div class="flex -mb-px">
                            <button type="button" id="search-tab-btn" 
                                class="border-b-2 border-blue-500 py-2 px-4 text-sm font-medium text-blue-600">
                                Search Foods
                            </button>
                            <button type="button" id="custom-tab-btn"
                                class="border-b border-transparent py-2 px-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                Add Custom Food
                            </button>
                            <button type="button" id="saved-tab-btn"
                                class="border-b border-transparent py-2 px-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                Saved Suggestions
                            </button>
                        </div>
                    </div>
                    
                    <!-- Search tab content -->
                    <div id="search-tab" class="mt-4">
                        <div class="relative">
                            <input
                                type="text"
                                id="food-search"
                                placeholder="Search foods..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 pl-10"
                            >
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Search results (example) -->
                        <div id="search-results" class="mt-2 border rounded-md overflow-hidden">
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 border-b">
                                <div>
                                    <p class="font-medium">Banana</p>
                                    <p class="text-sm text-gray-500">1 medium (118g) • 105 cal</p>
                                </div>
                                <button type="button" class="add-food-btn bg-blue-50 text-blue-600 hover:bg-blue-100 px-3 py-1 rounded-full text-sm font-medium"
                                    data-id="1" data-name="Banana" data-calories="105" data-protein="1.3" data-carbs="27" data-fat="0.4">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add Custom Food form (hidden by default) -->
                    <div id="custom-tab" class="mt-4 hidden">
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Food Name</label>
                                <input type="text" id="custom-food-name" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Serving Size</label>
                                <input type="text" id="custom-serving-size" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Calories</label>
                                <input type="number" id="custom-calories" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Protein (g)</label>
                                <input type="number" id="custom-protein" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Carbs (g)</label>
                                <input type="number" id="custom-carbs" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Fat (g)</label>
                                <input type="number" id="custom-fat" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                        <button type="button" id="add-custom-food-btn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md">
                            Add Custom Food
                        </button>
                    </div>
                    
                    <!-- Saved Suggestions (hidden by default) -->
                    <div id="saved-tab" class="mt-4 hidden">
                        <div class="border rounded-md overflow-hidden">
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 border-b">
                                <div>
                                    <p class="font-medium">My Usual Breakfast</p>
                                    <p class="text-sm text-gray-500">Oatmeal, Banana, Coffee</p>
                                </div>
                                <button type="button" class="use-template-btn bg-blue-50 text-blue-600 hover:bg-blue-100 px-3 py-1 rounded-full text-sm font-medium"
                                    data-id="1">
                                    Use
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Added food items -->
                <div class="mb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Added Food Items</h2>
                    
                    <div id="food-items-container">
                        <div class="overflow-hidden border rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Food</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Calories</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Protein</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Carbs</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fat</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="added-foods-container" class="bg-white divide-y divide-gray-200">
                                    <tr data-food-id="2">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Oatmeal</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <input
                                                type="number"
                                                name="food_items[2][quantity]"
                                                class="quantity-input w-16 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                                min="0.25"
                                                step="0.25"
                                                value="1"
                                            >
                                            <input type="hidden" name="food_items[2][food_id]" value="2">
                                            <input type="hidden" name="food_items[2][custom_food_name]" value="">
                                            <input type="hidden" name="food_items[2][custom_calories]" value="">
                                            <input type="hidden" name="food_items[2][custom_protein]" value="">
                                            <input type="hidden" name="food_items[2][custom_carbs]" value="">
                                            <input type="hidden" name="food_items[2][custom_fat]" value="">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 calories-cell" data-value="150">150</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 protein-cell" data-value="5">5g</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 carbs-cell" data-value="27">27g</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 fat-cell" data-value="3">3g</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button type="button" class="remove-food-btn text-red-600 hover:text-red-900">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray-50">
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Total</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500"></td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900 total-calories">150</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900 total-protein">5g</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900 total-carbs">27g</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900 total-fat">3g</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Allergen warnings -->
                <div class="mb-6">
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Allergen Warnings</h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Oatmeal: May contain traces of gluten</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Save button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md shadow-sm">
                        Save Meal Log
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tab switching
        const searchTabBtn = document.getElementById('search-tab-btn');
        const customTabBtn = document.getElementById('custom-tab-btn');
        const savedTabBtn = document.getElementById('saved-tab-btn');
        
        const searchTab = document.getElementById('search-tab');
        const customTab = document.getElementById('custom-tab');
        const savedTab = document.getElementById('saved-tab');
        
        searchTabBtn.addEventListener('click', function() {
            // Show search tab, hide others
            searchTab.classList.remove('hidden');
            customTab.classList.add('hidden');
            savedTab.classList.add('hidden');
            
            // Update active tab styling
            searchTabBtn.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
            searchTabBtn.classList.remove('border-b', 'border-transparent', 'text-gray-500');
            
            customTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            customTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
            
            savedTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            savedTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
        });
        
        customTabBtn.addEventListener('click', function() {
            // Show custom tab, hide others
            searchTab.classList.add('hidden');
            customTab.classList.remove('hidden');
            savedTab.classList.add('hidden');
            
            // Update active tab styling
            searchTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            searchTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
            
            customTabBtn.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
            customTabBtn.classList.remove('border-b', 'border-transparent', 'text-gray-500');
            
            savedTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            savedTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
        });
        
        savedTabBtn.addEventListener('click', function() {
            // Show saved tab, hide others
            searchTab.classList.add('hidden');
            customTab.classList.add('hidden');
            savedTab.classList.remove('hidden');
            
            // Update active tab styling
            searchTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            searchTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
            
            customTabBtn.classList.remove('border-b-2', 'border-blue-500', 'text-blue-600');
            customTabBtn.classList.add('border-b', 'border-transparent', 'text-gray-500');
            
            savedTabBtn.classList.add('border-b-2', 'border-blue-500', 'text-blue-600');
            savedTabBtn.classList.remove('border-b', 'border-transparent', 'text-gray-500');
        });
        
        // Handle food search (would normally be AJAX)
        const foodSearch = document.getElementById('food-search');
        const searchResults = document.getElementById('search-results');
        
        foodSearch.addEventListener('input', function() {
            // In a real app, this would trigger an AJAX search
            console.log('Searching for: ' + this.value);
        });
        
        // Add food from search results
        document.querySelectorAll('.add-food-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const foodId = this.dataset.id;
                const foodName = this.dataset.name;
                const calories = this.dataset.calories;
                const protein = this.dataset.protein;
                const carbs = this.dataset.carbs;
                const fat = this.dataset.fat;
                
                addFoodToTable(foodId, foodName, calories, protein, carbs, fat);
                updateTotals();
            });
        });
        
        // Add custom food
        const addCustomFoodBtn = document.getElementById('add-custom-food-btn');
        
        addCustomFoodBtn.addEventListener('click', function() {
            const name = document.getElementById('custom-food-name').value;
            const calories = document.getElementById('custom-calories').value;
            const protein = document.getElementById('custom-protein').value;
            const carbs = document.getElementById('custom-carbs').value;
            const fat = document.getElementById('custom-fat').value;
            
            if (name && calories) {
                addCustomFoodToTable(name, calories, protein, carbs, fat);
                updateTotals();
                
                // Clear the form
                document.getElementById('custom-food-name').value = '';
                document.getElementById('custom-serving-size').value = '';
                document.getElementById('custom-calories').value = '';
                document.getElementById('custom-protein').value = '';
                document.getElementById('custom-carbs').value = '';
                document.getElementById('custom-fat').value = '';
            }
        });
        
        // Use template
        document.querySelectorAll('.use-template-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const templateId = this.dataset.id;
                
                // In a real app, this would fetch the template's foods and add them
                console.log('Using template: ' + templateId);
                
                // For demo, just add an example food
                if (templateId === '1') {
                    // Add sample foods from the template
                    addFoodToTable(3, 'Oatmeal', 150, 5, 27, 3);
                    addFoodToTable(4, 'Banana', 105, 1.3, 27, 0.4);
                    addFoodToTable(5, 'Coffee', 5, 0, 0, 0);
                    updateTotals();
                }
            });
        });
        
        // Remove food item
        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-food-btn')) {
                e.target.closest('tr').remove();
                updateTotals();
            }
        });
        
        // Update quantities
        document.addEventListener('change', function(e) {
            if (e.target && e.target.classList.contains('quantity-input')) {
                updateTotals();
            }
        });
        
        // Helper functions
        function addFoodToTable(foodId, name, calories, protein, carbs, fat) {
            const container = document.getElementById('added-foods-container');
            const itemCount = container.querySelectorAll('tr').length;
            const newIndex = itemCount;
            
            const row = document.createElement('tr');
            row.dataset.foodId = foodId;
            
            row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${name}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <input
                        type="number"
                        name="food_items[${newIndex}][quantity]"
                        class="quantity-input w-16 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        min="0.25"
                        step="0.25"
                        value="1"
                    >
                    <input type="hidden" name="food_items[${newIndex}][food_id]" value="${foodId}">
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 calories-cell" data-value="${calories}">${calories}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 protein-cell" data-value="${protein}">${protein}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 carbs-cell" data-value="${carbs}">${carbs}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 fat-cell" data-value="${fat}">${fat}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button type="button" class="remove-food-btn text-red-600 hover:text-red-900">Remove</button>
                </td>
            `;
            
            container.appendChild(row);
        }
        
        function addCustomFoodToTable(name, calories, protein, carbs, fat) {
            const container = document.getElementById('added-foods-container');
            const itemCount = container.querySelectorAll('tr').length;
            const newIndex = itemCount;
            
            const row = document.createElement('tr');
            row.dataset.custom = 'true';
            
            row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${name} (Custom)</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <input
                        type="number"
                        name="food_items[${newIndex}][quantity]"
                        class="quantity-input w-16 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        min="0.25"
                        step="0.25"
                        value="1"
                    >
                    <input type="hidden" name="food_items[${newIndex}][custom_food_name]" value="${name}">
                    <input type="hidden" name="food_items[${newIndex}][custom_calories]" value="${calories}">
                    <input type="hidden" name="food_items[${newIndex}][custom_protein]" value="${protein}">
                    <input type="hidden" name="food_items[${newIndex}][custom_carbs]" value="${carbs}">
                    <input type="hidden" name="food_items[${newIndex}][custom_fat]" value="${fat}">
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 calories-cell" data-value="${calories}">${calories}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 protein-cell" data-value="${protein}">${protein}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 carbs-cell" data-value="${carbs}">${carbs}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 fat-cell" data-value="${fat}">${fat}g</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button type="button" class="remove-food-btn text-red-600 hover:text-red-900">Remove</button>
                </td>
            `;
            
            container.appendChild(row);
        }
        
        function updateTotals() {
            let totalCalories = 0;
            let totalProtein = 0;
            let totalCarbs = 0;
            let totalFat = 0;
            
            document.querySelectorAll('#added-foods-container tr').forEach(row => {
                const quantity = parseFloat(row.querySelector('.quantity-input').value) || 0;
                const calories = parseFloat(row.querySelector('.calories-cell').dataset.value) || 0;
                const protein = parseFloat(row.querySelector('.protein-cell').dataset.value) || 0;
                const carbs = parseFloat(row.querySelector('.carbs-cell').dataset.value) || 0;
                const fat = parseFloat(row.querySelector('.fat-cell').dataset.value) || 0;
                
                totalCalories += calories * quantity;
                totalProtein += protein * quantity;
                totalCarbs += carbs * quantity;
                totalFat += fat * quantity;
            });
            
            document.querySelector('.total-calories').textContent = Math.round(totalCalories);
            document.querySelector('.total-protein').textContent = Math.round(totalProtein * 10) / 10 + 'g';
            document.querySelector('.total-carbs').textContent = Math.round(totalCarbs * 10) / 10 + 'g';
            document.querySelector('.total-fat').textContent = Math.round(totalFat * 10) / 10 + 'g';
        }
    });
</script>
@endpush
@endsection