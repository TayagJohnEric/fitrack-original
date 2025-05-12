<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    public function dashboard(){

        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }

    public function foodManagement(){

         $user = Auth::user();

        return view('admin.foods.food_management', compact('user'));
    }
}
