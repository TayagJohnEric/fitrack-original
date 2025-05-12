@extends('layouts.admin.app')

@section('title', 'Workout Templates')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Workout Templates</h1>
            <p class="mt-1 text-sm text-gray-500">Manage all workout templates here.</p>
        </div>

        <a href="{{ route('admin.workout-templates.create') }}" class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Add Template</a>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full border rounded">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Type</th>
                        <th class="p-2 border">Level</th>
                        <th class="p-2 border">Generic?</th>
                        <th class="p-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($templates as $template)
                        <tr class="border-t">
                            <td class="p-2">{{ $template->name }}</td>
                            <td class="p-2">{{ $template->workoutType->name }}</td>
                            <td class="p-2">{{ $template->experienceLevel->name }}</td>
                            <td class="p-2">{{ $template->is_generic ? 'Yes' : 'No' }}</td>
                            <td class="p-2">
                                <a href="{{ route('admin.workout-templates.edit', $template) }}" class="text-blue-600">Edit</a>
                                <form action="{{ route('admin.workout-templates.destroy', $template) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Delete this item?')">Delete</button>
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
