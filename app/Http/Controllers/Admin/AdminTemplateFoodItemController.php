<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemplateFoodItem;
use App\Models\FoodSuggestionTemplate;
use App\Models\FoodItem;
use Illuminate\Support\Facades\Auth;

class AdminTemplateFoodItemController extends Controller
{
      public function index()
    {
        $user = Auth::user();
        $templateFoodItems = TemplateFoodItem::with(['template', 'food'])->get();
        return view('admin.foods.template-food-items.index', compact('templateFoodItems', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $templates = FoodSuggestionTemplate::all();
        $foods = FoodItem::all();
        return view('admin.foods.template-food-items.create', compact('templates', 'foods','user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'template_id' => 'required|exists:food_suggestion_templates,id',
            'food_id' => 'required|exists:food_items,id',
            'suggested_quantity' => 'required|numeric|min:0',
            'is_required' => 'boolean',
            'alternatives_group_id' => 'nullable|numeric',
        ]);

        TemplateFoodItem::create($request->all());
        return redirect()->route('admin.template-food-items.index')->with('success', 'Food item added successfully!');
    }

    public function edit(TemplateFoodItem $templateFoodItem)
    {
        $user = Auth::user();
        $templates = FoodSuggestionTemplate::all();
        $foods = FoodItem::all();
        return view('admin.foods.template-food-items.edit', compact('templateFoodItem', 'templates', 'foods', 'user'));
    }

    public function update(Request $request, TemplateFoodItem $templateFoodItem)
    {
        $request->validate([
            'template_id' => 'required|exists:food_suggestion_templates,id',
            'food_id' => 'required|exists:food_items,id',
            'suggested_quantity' => 'required|numeric|min:0',
            'is_required' => 'boolean',
            'alternatives_group_id' => 'nullable|numeric',
        ]);

        $templateFoodItem->update($request->all());
        return redirect()->route('admin.template-food-items.index')->with('success', 'Food item updated successfully!');
    }

    public function destroy(TemplateFoodItem $templateFoodItem)
    {
        $templateFoodItem->delete();
        return redirect()->route('admin.template-food-items.index')->with('success', 'Food item deleted.');
    }
}
