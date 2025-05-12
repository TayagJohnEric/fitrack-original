@extends('layouts.admin.app')

@section('title', 'Add Food Suggestion')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Add Food Suggestion</h1>
            <p class="mt-1 text-sm text-gray-500">Create a new food suggestion category and associate it with a fitness goal.</p>
        </div>

        <form action="{{ route('admin.food-suggestions.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Fitness Goal</label>
                <select name="fitness_goal_id"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="">-- Select Fitness Goal --</option>
                    @foreach($fitnessGoals as $goal)
                        <option value="{{ $goal->id }}" {{ old('fitness_goal_id') == $goal->id ? 'selected' : '' }}>
                            {{ $goal->name }}
                        </option>
                    @endforeach
                </select>
                @error('fitness_goal_id')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Create</button>
                <a href="{{ route('admin.food-suggestions.index') }}"
                    class="ml-4 text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
