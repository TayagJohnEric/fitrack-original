<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodSuggestionCategory;
use App\Models\FitnessGoal;
use Illuminate\Support\Facades\Auth;


class AdminFoodSuggestionCategoryController extends Controller
{
     public function index()
    {
        $user = Auth::user();
        $categories = FoodSuggestionCategory::with('fitnessGoal')->get();
        return view('admin.foods.food-suggestions.index', compact('categories','user'));
    }

    public function create()
    {
                $user = Auth::user();
        $fitnessGoals = FitnessGoal::all();
        return view('admin.foods.food-suggestions.create', compact('fitnessGoals', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'fitness_goal_id' => 'nullable|exists:fitness_goals,id',
        ]);

        FoodSuggestionCategory::create($validated);

        return redirect()->route('admin.food-suggestions.index')->with('success', 'Food item created.');
    }

    public function edit(FoodSuggestionCategory $foodSuggestion)
    {
                $user = Auth::user();
        $fitnessGoals = FitnessGoal::all();
        return view('admin.foods.food-suggestions.edit', compact('foodSuggestion', 'fitnessGoals', 'user'));
    }

    public function update(Request $request, FoodSuggestionCategory $foodSuggestion)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'fitness_goal_id' => 'nullable|exists:fitness_goals,id',
        ]);

        $foodSuggestion->update($validated);

        return redirect()->route('admin.food-suggestions.index')->with('success', 'Food item updated.');
    }

    public function destroy(FoodSuggestionCategory $foodSuggestion)
    {
        $foodSuggestion->delete();
        return redirect()->route('admin.food-suggestions.index')->with('success', 'Food item deleted.');
    }
}
