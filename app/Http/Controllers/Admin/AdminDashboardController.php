<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FoodSuggestionCategory;
use App\Models\FoodSuggestionTemplate;
use App\Models\FoodItem;
use App\Models\TemplateFoodItem;


class AdminDashboardController extends Controller
{
    public function dashboard(){

        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }

    public function foodManagement()
{
    $user = Auth::user();

    $foodItemCount = FoodItem::count();
    $foodSuggestionCount = FoodSuggestionTemplate::count(); // or another model depending on your structure
    $foodTemplateCount = FoodSuggestionCategory::count();
    $templateFoodItemCount = TemplateFoodItem::count();

    return view('admin.foods.food_management', compact(
        'user',
        'foodItemCount',
        'foodSuggestionCount',
        'foodTemplateCount',
        'templateFoodItemCount'
    ));
}
}
