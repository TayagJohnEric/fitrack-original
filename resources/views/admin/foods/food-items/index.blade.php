@extends('layouts.admin.app')
@section('title', 'Manage Food Items')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Food Items</h1>
            <p class="mt-1 text-sm text-gray-500">View, edit, or delete food items from the database.</p>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Calories</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Protein</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Carbs</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Fat</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($foodItems as $item)
                        <tr>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->calories_per_serving }}</td>
                            <td class="px-4 py-2">{{ $item->protein_grams_per_serving }}</td>
                            <td class="px-4 py-2">{{ $item->carb_grams_per_serving }}</td>
                            <td class="px-4 py-2">{{ $item->fat_grams_per_serving }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('admin.food-items.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.food-items.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
