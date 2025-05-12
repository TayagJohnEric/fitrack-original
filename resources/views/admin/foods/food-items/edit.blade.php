@extends('layouts.admin.app')
@section('title', 'Edit Food Item')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-3xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Edit Food Item</h1>
            <p class="mt-1 text-sm text-gray-500">Update the food item details below.</p>
        </div>

        <form action="{{ route('admin.food-items.update', $foodItem->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            @foreach([
                'name' => 'Name',
                'serving_size_description' => 'Serving Size Description',
                'serving_size_grams' => 'Serving Size (grams)',
                'calories_per_serving' => 'Calories',
                'protein_grams_per_serving' => 'Protein (g)',
                'carb_grams_per_serving' => 'Carbohydrates (g)',
                'fat_grams_per_serving' => 'Fat (g)',
                'allergy_info' => 'Allergy Info',
                'image_url' => 'Image URL'
            ] as $field => $label)
                <div>
                    <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                    <input
                        type="{{ in_array($field, ['image_url']) ? 'url' : 'text' }}"
                        name="{{ $field }}"
                        id="{{ $field }}"
                        value="{{ old($field, $foodItem->$field) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                    @error($field)
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            @endforeach

            <div class="pt-4">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update</button>
                <a href="{{ route('admin.food-items.index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
