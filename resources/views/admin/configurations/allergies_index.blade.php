@extends('layouts.admin.app')
@section('title', 'Allergies Management')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Manage Allergies</h1>
            <p class="mt-1 text-sm text-gray-500">Add and manage allergies available in the system.</p>
        </div>

        @if(session('success'))
            <div class="mb-6">
                <div class="rounded-md bg-green-50 p-4 border border-green-200">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3 text-sm text-green-700">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Add Allergy Form -->
        <div class="bg-gray-50 p-6 rounded-lg shadow-md mb-10 max-w-xl">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Add New Allergy</h2>
            <form action="{{ route('admin.allergies.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Allergy Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-500 transition">
                        Add Allergy
                    </button>
                </div>
            </form>
        </div>

        <!-- Allergies Table -->
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle border rounded-lg overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100 text-gray-700 font-medium">
                        <tr>
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Allergy Name</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($allergies as $allergy)
                            <tr>
                                <td class="px-6 py-4">{{ $allergy->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $allergy->name }}</td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('admin.allergies.destroy', $allergy) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this allergy?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-red-500 transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-gray-500">No allergies found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Navigation -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-xl">
            <a href="{{ route('admin.activity-levels.index') }}" class="bg-blue-500 text-white text-center py-2 px-4 rounded-md hover:bg-blue-600 transition">Activity Levels</a>
            <a href="{{ route('admin.fitness-goals.index') }}" class="bg-blue-500 text-white text-center py-2 px-4 rounded-md hover:bg-blue-600 transition">Fitness Goals</a>
            <a href="{{ route('admin.experience-levels.index') }}" class="bg-blue-500 text-white text-center py-2 px-4 rounded-md hover:bg-blue-600 transition">Experience Levels</a>
            <a href="{{ route('admin.workout-types.index') }}" class="bg-blue-500 text-white text-center py-2 px-4 rounded-md hover:bg-blue-600 transition">Workout Types</a>
            <a href="{{ route('admin.allergies.index') }}" class="bg-blue-500 text-white text-center py-2 px-4 rounded-md hover:bg-blue-600 transition">Allergies</a>
        </div>
    </div>
</div>
@endsection
