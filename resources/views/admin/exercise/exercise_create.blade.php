@extends('layouts.admin.app')

@section('title', 'Add New Exercise')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Add New Exercise</h1>
            <p class="mt-1 text-sm text-gray-500">Fill out the form below to add a new exercise.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.exercises.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Muscle Group</label>
                <input type="text" name="muscle_group" value="{{ old('muscle_group') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Equipment Needed</label>
                <input type="text" name="equipment_needed" value="{{ old('equipment_needed') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Video URL</label>
                <input type="url" name="video_url" value="{{ old('video_url') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Create Exercise</button>
                <a href="{{ route('admin.exercises.index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
