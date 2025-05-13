@extends('layouts.user.app')
@section('title', 'Profile Settings')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Profile Settings</h1>
            <p class="mt-1 text-sm text-gray-500">Update your personal information and preferences</p>
        </div>

        <!-- Profile Settings Content -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Tabs -->
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px overflow-x-auto">
                    <button class="text-indigo-600 border-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm sm:px-4">
                        Account
                    </button>
                    <button class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm sm:px-4">
                        Basic Information
                    </button>
                    <button class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm sm:px-4">
                        Physical Information
                    </button>
                    <button class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm sm:px-4">
                        Lifestyle & Preferences
                    </button>
                    <button class="text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm sm:px-4">
                        Allergies
                    </button>
                </nav>
            </div>

            <!-- Form Content -->
            <div class="p-6">
                <!-- Account Section -->
                <div class="space-y-8">
                    <form action="#" method="POST" class="divide-y divide-gray-200">
                        @csrf
                        
                        <!-- Account Information -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Account Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your account credentials.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                    <div class="mt-1">
                                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="johndoe@example.com">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                    <div class="mt-1">
                                        <input type="text" name="username" id="username" autocomplete="username" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="johndoe">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Change Password -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Change Password</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your password to maintain account security.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                    <div class="mt-1">
                                        <input type="password" name="current_password" id="current_password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3"></div>
                                
                                <div class="sm:col-span-3">
                                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                                    <div class="mt-1">
                                        <input type="password" name="new_password" id="new_password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                                    <div class="mt-1">
                                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Basic Information -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Basic Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your basic personal information.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="John">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="Doe">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                    <div class="mt-1">
                                        <input type="date" name="date_of_birth" id="date_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="1990-01-01">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="sex" class="block text-sm font-medium text-gray-700">Sex</label>
                                    <div class="mt-1">
                                        <select id="sex" name="sex" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                            <option value="PreferNotToSay">Prefer Not To Say</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Physical Information -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Physical Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your physical measurements.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="height_cm" class="block text-sm font-medium text-gray-700">Height (cm)</label>
                                    <div class="mt-1">
                                        <input type="number" name="height_cm" id="height_cm" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="175">
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="current_weight_kg" class="block text-sm font-medium text-gray-700">Current Weight (kg)</label>
                                    <div class="mt-1">
                                        <input type="number" step="0.01" name="current_weight_kg" id="current_weight_kg" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="70.5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Lifestyle & Preferences -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Lifestyle & Preferences</h3>
                            <p class="mt-1 text-sm text-gray-500">Update your lifestyle and fitness preferences.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="activity_level_id" class="block text-sm font-medium text-gray-700">Activity Level</label>
                                    <div class="mt-1">
                                        <select id="activity_level_id" name="activity_level_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="1">Sedentary</option>
                                            <option value="2">Lightly Active</option>
                                            <option value="3" selected>Moderately Active</option>
                                            <option value="4">Very Active</option>
                                            <option value="5">Extremely Active</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="fitness_goal_id" class="block text-sm font-medium text-gray-700">Primary Fitness Goal</label>
                                    <div class="mt-1">
                                        <select id="fitness_goal_id" name="fitness_goal_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="1">Weight Loss</option>
                                            <option value="2" selected>Muscle Gain</option>
                                            <option value="3">Maintain Weight</option>
                                            <option value="4">Improve Endurance</option>
                                            <option value="5">General Fitness</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="experience_level_id" class="block text-sm font-medium text-gray-700">Experience Level</label>
                                    <div class="mt-1">
                                        <select id="experience_level_id" name="experience_level_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="1">Beginner</option>
                                            <option value="2" selected>Intermediate</option>
                                            <option value="3">Advanced</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-3">
                                    <label for="preferred_workout_type_id" class="block text-sm font-medium text-gray-700">Preferred Workout Type</label>
                                    <div class="mt-1">
                                        <select id="preferred_workout_type_id" name="preferred_workout_type_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="1">Strength Training</option>
                                            <option value="2">Cardio</option>
                                            <option value="3" selected>HIIT</option>
                                            <option value="4">Yoga</option>
                                            <option value="5">Pilates</option>
                                            <option value="6">CrossFit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Allergies -->
                        <div class="space-y-6 pt-6">
                            <h3 class="text-lg font-medium text-gray-900">Allergies</h3>
                            <p class="mt-1 text-sm text-gray-500">Select any allergies or dietary restrictions you have.</p>
                            
                            <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-12">
                                <div class="sm:col-span-12">
                                    <fieldset>
                                        <legend class="sr-only">Allergies</legend>
                                        <div class="space-y-2 sm:flex sm:flex-wrap sm:gap-3 sm:space-y-0">
                                            <div class="flex items-center">
                                                <input id="allergy_1" name="allergies[]" value="1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="allergy_1" class="ml-2 text-sm text-gray-700">Gluten</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="allergy_2" name="allergies[]" value="2" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                                                <label for="allergy_2" class="ml-2 text-sm text-gray-700">Lactose</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="allergy_3" name="allergies[]" value="3" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="allergy_3" class="ml-2 text-sm text-gray-700">Nuts</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="allergy_4" name="allergies[]" value="4" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="allergy_4" class="ml-2 text-sm text-gray-700">Shellfish</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="allergy_5" name="allergies[]" value="5" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="allergy_5" class="ml-2 text-sm text-gray-700">Soy</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="allergy_6" name="allergies[]" value="6" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="allergy_6" class="ml-2 text-sm text-gray-700">Eggs</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Save Button -->
                        <div class="pt-6">
                            <div class="flex justify-end">
                                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection