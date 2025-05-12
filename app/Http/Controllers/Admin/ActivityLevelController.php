<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLevel;
use App\Models\FitnessGoal;
use App\Models\ExperienceLevel;
use App\Models\WorkoutType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityLevelController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $activityLevels = ActivityLevel::all();
        return view('admin.configurations.activity_levels_index', compact('activityLevels', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ActivityLevel::create($request->all());

        return redirect()->route('admin.activity-levels.index')
            ->with('success', 'Activity level added successfully');
    }

    public function destroy(ActivityLevel $activityLevel)
    {
        $activityLevel->delete();

        return redirect()->route('admin.activity-levels.index')
            ->with('success', 'Activity level deleted successfully');
    }
}
