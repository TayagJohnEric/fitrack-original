<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodSuggestionCategory;
use App\Models\FoodSuggestionTemplate;
use App\Models\ExperienceLevel;
use Illuminate\Support\Facades\Auth;

class AdminFoodSuggestionTemplateController extends Controller
{
     public function index()
    {
        $user = Auth::user();
        $templates = FoodSuggestionTemplate::with(['category', 'minExperienceLevel'])->latest()->get();
        return view('admin.foods.food-templates.index', compact('templates', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $categories = FoodSuggestionCategory::all();
        $experienceLevels = ExperienceLevel::all();
        return view('admin.foods.food-templates.create', compact('categories', 'experienceLevels', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:food_suggestion_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_meal_type' => 'required|in:Breakfast,Lunch,Dinner,Snack,Any',
            'min_experience_level_id' => 'nullable|exists:experience_levels,id',
        ]);

        FoodSuggestionTemplate::create($validated);
        return redirect()->route('admin.food-templates.index')->with('success', 'Food item created successfully.');
    }

    public function edit(FoodSuggestionTemplate $foodTemplate)
    {
        $user = Auth::user();
        $categories = FoodSuggestionCategory::all();
        $experienceLevels = ExperienceLevel::all();
        return view('admin.foods.food-templates.edit', compact('foodTemplate', 'categories', 'experienceLevels', 'user'));
    }

    public function update(Request $request, FoodSuggestionTemplate $foodTemplate)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:food_suggestion_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_meal_type' => 'required|in:Breakfast,Lunch,Dinner,Snack,Any',
            'min_experience_level_id' => 'nullable|exists:experience_levels,id',
        ]);

        $foodTemplate->update($validated);
        return redirect()->route('admin.food-templates.index')->with('success', 'Food item updated successfully.');
    }

    public function destroy(FoodSuggestionTemplate $foodTemplate)
    {
        $foodTemplate->delete();
        return redirect()->route('admin.food-templates.index')->with('success', 'Food item deleted successfully.');
    }
}
