<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;

class AdminExerciseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $exercises = Exercise::latest()->get();
        return view('admin.exercise.exercise_index', compact('exercises', 'user'));
    }

    public function create()
    {
                $user = Auth::user();
        return view('admin.exercise.exercise_create', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'muscle_group' => 'nullable|string|max:255',
            'equipment_needed' => 'nullable|string|max:255',
            'video_url' => 'nullable|url|max:255',
        ]);

        Exercise::create($validated);

        return redirect()->route('admin.exercises.index')->with('success', 'Exercise created successfully.');
    }

    public function edit(Exercise $exercise)
    {
                $user = Auth::user();

        return view('admin.exercise.exercise_edit', compact('exercise', 'user'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'muscle_group' => 'nullable|string|max:255',
            'equipment_needed' => 'nullable|string|max:255',
            'video_url' => 'nullable|url|max:255',
        ]);

        $exercise->update($validated);

        return redirect()->route('admin.exercises.index')->with('success', 'Exercise updated successfully.');
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return redirect()->route('admin.exercises.index')->with('success', 'Exercise deleted successfully.');
    }
}
