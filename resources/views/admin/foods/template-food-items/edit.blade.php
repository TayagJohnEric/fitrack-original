@extends('layouts.admin.app')

@section('title', 'Edit Template Food Item')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Edit Template Food Item</h1>
            <p class="mt-1 text-sm text-gray-500">Update the food item associated with a template.</p>
        </div>

        @if($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.template-food-items.update', $templateFoodItem->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Template</label>
                    <select name="template_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                        @foreach($templates as $template)
                            <option value="{{ $template->id }}" {{ old('template_id', $templateFoodItem->template_id) == $template->id ? 'selected' : '' }}>
                                {{ $template->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Food</label>
                    <select name="food_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}" {{ old('food_id', $templateFoodItem->food_id) == $food->id ? 'selected' : '' }}>
                                {{ $food->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Suggested Quantity</label>
                <input type="number" step="0.01" name="suggested_quantity" value="{{ old('suggested_quantity', $templateFoodItem->suggested_quantity) }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Is Required</label>
                <select name="is_required" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                    <option value="1" {{ old('is_required', $templateFoodItem->is_required) == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('is_required', $templateFoodItem->is_required) == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Alternatives Group ID</label>
                <input type="number" name="alternatives_group_id" value="{{ old('alternatives_group_id', $templateFoodItem->alternatives_group_id) }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="pt-4">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
