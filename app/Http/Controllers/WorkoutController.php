<?php

namespace App\Http\Controllers;
use App\Models\Workout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function workout()
    {
        $user = Auth::user();
        return view('user.workouts.workout', compact('user'));
    }
}
