<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActivityLevelController;
use App\Http\Controllers\Admin\FitnessGoalController;
use App\Http\Controllers\Admin\ExperienceLevelController;
use App\Http\Controllers\Admin\WorkoutTypeController;
use App\Http\Controllers\Admin\AllergyController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminFoodItemController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\AdminExerciseController;
use App\Http\Controllers\Admin\AdminWorkoutTemplateController;
use App\Http\Controllers\Admin\AdminFoodSuggestionCategoryController;
use App\Http\Controllers\Admin\AdminFoodSuggestionTemplateController;
use App\Http\Controllers\Admin\AdminTemplateFoodItemController;
use App\Http\Controllers\ProfileSetupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\FoodSuggestionController;



//LandingPage
Route::get('/', function () {
    return view('welcome');
});




//Admin Login Form
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.view');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout')->middleware('auth');


Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth']);
Route::get('/admin/food-management', [AdminDashboardController::class, 'foodManagement'])
        ->name('admin.food-management.dashboard');

//Manage Foods Items on admin side
Route::prefix('admin/food-items')->group(function () {
    Route::get('/', [AdminFoodItemController::class, 'index'])->name('admin.food-items.index');
    Route::get('/{id}/edit', [AdminFoodItemController::class, 'edit'])->name('admin.food-items.edit');
    Route::put('/{id}', [AdminFoodItemController::class, 'update'])->name('admin.food-items.update');
    Route::delete('/{id}', [AdminFoodItemController::class, 'destroy'])->name('admin.food-items.destroy');
});

//Manage Food Suggestion Category on admin side
Route::prefix('admin')->group(function () {
    Route::get('/food-suggestions', [AdminFoodSuggestionCategoryController::class, 'index'])->name('admin.food-suggestions.index');
    Route::get('/food-suggestions/create', [AdminFoodSuggestionCategoryController::class, 'create'])->name('admin.food-suggestions.create');
    Route::post('/food-suggestions', [AdminFoodSuggestionCategoryController::class, 'store'])->name('admin.food-suggestions.store');
    Route::get('/food-suggestions/{foodSuggestion}/edit', [AdminFoodSuggestionCategoryController::class, 'edit'])->name('admin.food-suggestions.edit');
    Route::put('/food-suggestions/{foodSuggestion}', [AdminFoodSuggestionCategoryController::class, 'update'])->name('admin.food-suggestions.update');
    Route::delete('/food-suggestions/{foodSuggestion}', [AdminFoodSuggestionCategoryController::class, 'destroy'])->name('admin.food-suggestions.destroy');
});

// Manage Food Suggestion Templates on amdin side
Route::get('/admin/food-templates', [AdminFoodSuggestionTemplateController::class, 'index'])->name('admin.food-templates.index');
Route::get('/admin/food-templates/create', [AdminFoodSuggestionTemplateController::class, 'create'])->name('admin.food-templates.create');
Route::post('/admin/food-templates', [AdminFoodSuggestionTemplateController::class, 'store'])->name('admin.food-templates.store');
Route::get('/admin/food-templates/{foodTemplate}/edit', [AdminFoodSuggestionTemplateController::class, 'edit'])->name('admin.food-templates.edit');
Route::put('/admin/food-templates/{foodTemplate}', [AdminFoodSuggestionTemplateController::class, 'update'])->name('admin.food-templates.update');
Route::delete('/admin/food-templates/{foodTemplate}', [AdminFoodSuggestionTemplateController::class, 'destroy'])->name('admin.food-templates.destroy');

// Manage Template Food Items on admin side
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/template-food-items', [AdminTemplateFoodItemController::class, 'index'])
        ->name('admin.template-food-items.index');
    Route::get('/template-food-items/create', [AdminTemplateFoodItemController::class, 'create'])
        ->name('admin.template-food-items.create');
    Route::post('/template-food-items', [AdminTemplateFoodItemController::class, 'store'])
        ->name('admin.template-food-items.store');
    Route::get('/template-food-items/{templateFoodItem}/edit', [AdminTemplateFoodItemController::class, 'edit'])
        ->name('admin.template-food-items.edit');
    Route::put('/template-food-items/{templateFoodItem}', [AdminTemplateFoodItemController::class, 'update'])
        ->name('admin.template-food-items.update');
    Route::delete('/template-food-items/{templateFoodItem}', [AdminTemplateFoodItemController::class, 'destroy'])
        ->name('admin.template-food-items.destroy');
});

//Manage WorkoutTemplates on admin side
Route::prefix('admin')->name('admin.workout-templates.')->group(function () {
    Route::get('/workout-templates', [AdminWorkoutTemplateController::class, 'index'])->name('index');
    Route::get('/workout-templates/create', [AdminWorkoutTemplateController::class, 'create'])->name('create');
    Route::post('/workout-templates', [AdminWorkoutTemplateController::class, 'store'])->name('store');
    Route::get('/workout-templates/{workoutTemplate}/edit', [AdminWorkoutTemplateController::class, 'edit'])->name('edit');
    Route::put('/workout-templates/{workoutTemplate}', [AdminWorkoutTemplateController::class, 'update'])->name('update');
    Route::delete('/workout-templates/{workoutTemplate}', [AdminWorkoutTemplateController::class, 'destroy'])->name('destroy');
});

// Manage Exercise on admin side
Route::get('/admin/exercises', [AdminExerciseController::class, 'index'])->name('admin.exercises.index');
Route::get('/exercises/create', [AdminExerciseController::class, 'create'])->name('admin.exercises.create');
Route::post('/exercises', [AdminExerciseController::class, 'store'])->name('admin.exercises.store');
Route::get('/exercises/{exercise}/edit', [AdminExerciseController::class, 'edit'])->name('admin.exercises.edit');
Route::put('/exercises/{exercise}', [AdminExerciseController::class, 'update'])->name('admin.exercises.update');
Route::delete('/exercises/{exercise}', [AdminExerciseController::class, 'destroy'])->name('admin.exercises.destroy');

//User Preferences Management for lookup tables 
Route::get('/admin/configurations', [ConfigurationController::class, 'index'])->name('admin.preferences');

Route::prefix('admin')->name('admin.')->group(function () {
    // Activity Levels
    Route::get('/activity-levels', [ActivityLevelController::class, 'index'])->name('activity-levels.index');
    Route::post('/activity-levels', [ActivityLevelController::class, 'store'])->name('activity-levels.store');
    Route::delete('/activity-levels/{activityLevel}', [ActivityLevelController::class, 'destroy'])->name('activity-levels.destroy');

    // Fitness Goals
    Route::get('/fitness-goals', [FitnessGoalController::class, 'index'])->name('fitness-goals.index');
    Route::post('/fitness-goals', [FitnessGoalController::class, 'store'])->name('fitness-goals.store');
    Route::delete('/fitness-goals/{fitnessGoal}', [FitnessGoalController::class, 'destroy'])->name('fitness-goals.destroy');

    // Experience Levels
    Route::get('/experience-levels', [ExperienceLevelController::class, 'index'])->name('experience-levels.index');
    Route::post('/experience-levels', [ExperienceLevelController::class, 'store'])->name('experience-levels.store');
    Route::delete('/experience-levels/{experienceLevel}', [ExperienceLevelController::class, 'destroy'])->name('experience-levels.destroy');

    // Workout Types
    Route::get('/workout-types', [WorkoutTypeController::class, 'index'])->name('workout-types.index');
    Route::post('/workout-types', [WorkoutTypeController::class, 'store'])->name('workout-types.store');
    Route::delete('/workout-types/{workoutType}', [WorkoutTypeController::class, 'destroy'])->name('workout-types.destroy');

    // Allergies
    Route::get('/allergies', [AllergyController::class, 'index'])->name('allergies.index');
    Route::post('/allergies', [AllergyController::class, 'store'])->name('allergies.store');
    Route::delete('/allergies/{allergy}', [AllergyController::class, 'destroy'])->name('allergies.destroy');
});













// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');




//Profile Setup After A User Registerring
Route::middleware(['auth'])->group(function () {
    // Profile setup routes
    Route::prefix('profile/setup')->name('profile.setup.')->group(function () {
        Route::get('/basics', [ProfileSetupController::class, 'showBasics'])->name('basics');
        Route::post('/basics', [ProfileSetupController::class, 'storeBasics']);
        Route::get('/physical', [ProfileSetupController::class, 'showPhysical'])->name('physical');
        Route::post('/physical', [ProfileSetupController::class, 'storePhysical']);
        Route::get('/preferences', [ProfileSetupController::class, 'showPreferences'])->name('preferences');
        Route::post('/preferences', [ProfileSetupController::class, 'storePreferences'])->name('preferences.store');
    });
    
    // Onboarding route (no onboarding middleware to prevent redirect loops)
    Route::get('/onboarding', [OnboardingController::class, 'processOnboarding'])
        ->name('onboarding.process');
        
    // Routes that require onboarding to be completed
    Route::middleware(['onboarding'])->group(function () {
        // Dashboard route
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
});














//User route

// Food Suggestion Favorites Routes
Route::middleware(['auth'])->group(function () {
    // View all favorites
    Route::get('/food/favorites', [FoodSuggestionController::class, 'favorites'])
        ->name('food.favorites');
    
    // Save a suggestion as favorite
    Route::post('/food/favorites/save', [FoodSuggestionController::class, 'saveFavorite'])
        ->name('food.favorites.save');
    
    // Remove a suggestion from favorites
    Route::delete('/food/favorites/{id}/remove', [FoodSuggestionController::class, 'removeFavorite'])
        ->name('food.favorites.remove');
    
    // Mark a favorite as used
    Route::post('/food/favorites/{id}/use', [FoodSuggestionController::class, 'markAsUsed'])
        ->name('food.favorites.use');
    
    // Update custom name for a favorite
    Route::patch('/food/favorites/{id}/update-name', [FoodSuggestionController::class, 'updateCustomName'])
        ->name('food.favorites.update-name');
});

