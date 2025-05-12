<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutTemplate;
use App\Models\WorkoutType;
use App\Models\ExperienceLevel;
use Illuminate\Support\Facades\Auth;


class AdminWorkoutTemplateController extends Controller
{
     public function index()
    {
         $user = Auth::user();
        $templates = WorkoutTemplate::with(['experienceLevel', 'workoutType'])->get();
        return view('admin.workout-templates.workout_index', compact('templates', 'user'));
    }

    public function create()
    {
      $user = Auth::user();
        $types = WorkoutType::all();
        $levels = ExperienceLevel::all();
        return view('admin.workout-templates.workout_create', compact('types', 'levels', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'experience_level_id' => 'required|exists:experience_levels,id',
            'workout_type_id' => 'required|exists:workout_types,id',
            'is_generic' => 'nullable|boolean'
        ]);

        WorkoutTemplate::create($request->all());

        return redirect()->route('admin.workout-templates.index')->with('success', 'Workout Template created successfully.');
    }

    public function edit(WorkoutTemplate $workoutTemplate)
    {
        $user = Auth::user();
        $types = WorkoutType::all();
        $levels = ExperienceLevel::all();
        return view('admin.workout-templates.workout_edit', compact('workoutTemplate', 'types', 'levels','user'));
    }

    public function update(Request $request, WorkoutTemplate $workoutTemplate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'experience_level_id' => 'required|exists:experience_levels,id',
            'workout_type_id' => 'required|exists:workout_types,id',
            'is_generic' => 'nullable|boolean'
        ]);

        $workoutTemplate->update($request->all());

        return redirect()->route('admin.workout-templates.index')->with('success', 'Workout Template updated successfully.');
    }

    public function destroy(WorkoutTemplate $workoutTemplate)
    {
        $workoutTemplate->delete();
        return redirect()->route('admin.workout-templates.index')->with('success', 'Workout Template deleted.');
    }
}
