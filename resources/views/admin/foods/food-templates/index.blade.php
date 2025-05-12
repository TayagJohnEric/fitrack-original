@extends('layouts.admin.app')

@section('title', 'Food Suggestion Templates')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Food Suggestion Templates</h1>
            <p class="mt-1 text-sm text-gray-500">Manage your food suggestions here</p>
            <a href="{{ route('admin.food-templates.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">+ Create New</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <table class="w-full table-auto border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Category</th>
                    <th class="px-4 py-2 text-left">Meal Type</th>
                    <th class="px-4 py-2 text-left">Experience Level</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($templates as $template)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $template->name }}</td>
                    <td class="px-4 py-2">{{ $template->category->name }}</td>
                    <td class="px-4 py-2">{{ $template->target_meal_type }}</td>
                    <td class="px-4 py-2">{{ $template->minExperienceLevel->name ?? 'N/A' }}</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <a href="{{ route('admin.food-templates.edit', $template) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.food-templates.destroy', $template) }}" method="POST" onsubmit="return confirm('Delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
