@extends('layouts.admin.app')

@section('title', 'Template Food Items')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Template Food Items</h1>
            <p class="mt-1 text-sm text-gray-500">Manage the food items linked to templates.</p>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="mb-4">
            <a href="{{ route('admin.template-food-items.create') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Add New</a>
        </div>

        <div class="bg-white shadow overflow-hidden rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500">Template</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500">Food</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500">Qty</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500">Required</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($templateFoodItems as $item)
                        <tr>
                            <td class="px-6 py-4">{{ $item->template->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $item->food->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $item->suggested_quantity }}</td>
                            <td class="px-6 py-4">{{ $item->is_required ? 'Yes' : 'No' }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.template-food-items.edit', $item->id) }}"
                                   class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                |
                                <form action="{{ route('admin.template-food-items.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure?')">Delete</button>
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
