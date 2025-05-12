@extends('layouts.admin.app')

@section('title', 'Edit Food Suggestion Template')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Edit Food Suggestion</h1>
            <p class="mt-1 text-sm text-gray-500">Update the food suggestion template details.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.food-templates.update', $foodTemplate->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-medium">Category</label>
                <select name="category_id" required class="mt-1 w-full border rounded px-3 py-2">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $foodTemplate->category_id) == $category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium">Name</label>
                <input type="text" name="name" value="{{ old('name', $foodTemplate->name) }}" required class="mt-1 w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Description</label>
                <textarea name="description" class="mt-1 w-full border rounded px-3 py-2">{{ old('description', $foodTemplate->description) }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Target Meal Type</label>
                <select name="target_meal_type" required class="mt-1 w-full border rounded px-3 py-2">
                    @foreach(['Breakfast', 'Lunch', 'Dinner', 'Snack', 'Any'] as $type)
                        <option value="{{ $type }}" {{ (old('target_meal_type', $foodTemplate->target_meal_type) == $type) ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium">Experience Level</label>
                <select name="min_experience_level_id" class="mt-1 w-full border rounded px-3 py-2">
                    <option value="">-- None --</option>
                    @foreach($experienceLevels as $level)
                        <option value="{{ $level->id }}" {{ (old('min_experience_level_id', $foodTemplate->min_experience_level_id) == $level->id) ? 'selected' : '' }}>
                            {{ $level->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('admin.food-templates.index') }}" class="ml-2 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
