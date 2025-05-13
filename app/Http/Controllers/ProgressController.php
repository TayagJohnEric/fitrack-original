<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function progress()
    {
        $user = Auth::user();
        return view('user.progress.progress', compact('user'));
    }
}
