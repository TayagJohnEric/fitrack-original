@extends('layouts.admin.app')

@section('title', 'Create Workout Template')

@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Create Workout Template</h1>
            <p class="mt-1 text-sm text-gray-500">Fill in the form to add a new workout template.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 px-4 py-2 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.workout-templates.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="mt-1 w-full border rounded px-3 py-2" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="mt-1 w-full border rounded px-3 py-2" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Workout Type</label>
                <select name="workout_type_id" class="mt-1 w-full border rounded px-3 py-2" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ old('workout_type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Experience Level</label>
                <select name="experience_level_id" class="mt-1 w-full border rounded px-3 py-2" required>
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}" {{ old('experience_level_id') == $level->id ? 'selected' : '' }}>{{ $level->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_generic" class="mr-2" value="1" {{ old('is_generic') ? 'checked' : '' }}>
                    Generic Template
                </label>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.workout-templates.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded mr-2">Cancel</a>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
