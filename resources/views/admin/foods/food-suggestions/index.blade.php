@extends('layouts.admin.app')

@section('title', 'Food Suggestion Categories')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Food Suggestion Categories</h1>
            <p class="mt-1 text-sm text-gray-500">Manage your food suggestions for each fitness goal</p>
        </div>

        <a href="{{ route('admin.food-suggestions.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Add New Food Item</a>

        @if(session('success'))
            <div class="text-green-600">{{ session('success') }}</div>
        @endif

        <table class="min-w-full bg-white border mt-4">
            <thead>
                <tr>
                    <th class="px-6 py-3 border">Name</th>
                    <th class="px-6 py-3 border">Description</th>
                    <th class="px-6 py-3 border">Fitness Goal</th>
                    <th class="px-6 py-3 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td class="border px-6 py-2">{{ $item->name }}</td>
                    <td class="border px-6 py-2">{{ $item->description }}</td>
                    <td class="border px-6 py-2">{{ $item->fitnessGoal->name ?? 'None' }}</td>
                    <td class="border px-6 py-2 space-x-2">
                        <a href="{{ route('admin.food-suggestions.edit', $item) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.food-suggestions.destroy', $item) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this item?')">
                            @csrf @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
