<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodItem;
use Illuminate\Support\Facades\Auth;


class AdminFoodItemController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $foodItems = FoodItem::all();
        return view('admin.foods.food-items.index', compact('foodItems', 'user'));
    }

    public function edit($id)
    {
                $user = Auth::user();

        $foodItem = FoodItem::findOrFail($id);
        return view('admin.foods.food-items.edit', compact('foodItem', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'serving_size_description' => 'required|string',
            'serving_size_grams' => 'nullable|numeric',
            'calories_per_serving' => 'required|numeric',
            'protein_grams_per_serving' => 'required|numeric',
            'carb_grams_per_serving' => 'required|numeric',
            'fat_grams_per_serving' => 'required|numeric',
            'allergy_info' => 'nullable|string',
            'image_url' => 'nullable|url',
        ]);

        $foodItem = FoodItem::findOrFail($id);
        $foodItem->update($request->all());

        return redirect()->route('admin.food-items.index')->with('success', 'Food item updated successfully.');
    }

    public function destroy($id)
    {
        $foodItem = FoodItem::findOrFail($id);
        $foodItem->delete();

        return redirect()->route('admin.food-items.index')->with('success', 'Food item deleted successfully.');
    }
}
