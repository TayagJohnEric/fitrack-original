<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogMealController extends Controller
{
    public function logMeal(){
        
        $user = Auth::user();
        return view('user.log-meal.log_meal', compact('user'));
    }
}
