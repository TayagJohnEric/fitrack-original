@extends('layouts.admin.app')

@section('title', 'Manage Exercises')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Exercise List</h1>
            <p class="mt-1 text-sm text-gray-500">Browse and manage all workout exercises</p>
        </div>

        <a href="{{ route('admin.exercises.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Add Exercise</a>

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Muscle Group</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Equipment</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($exercises as $exercise)
                        <tr>
                            <td class="px-6 py-4">{{ $exercise->name }}</td>
                            <td class="px-6 py-4">{{ $exercise->muscle_group }}</td>
                            <td class="px-6 py-4">{{ $exercise->equipment_needed }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('admin.exercises.edit', $exercise) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.exercises.destroy', $exercise) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Delete</button>
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
