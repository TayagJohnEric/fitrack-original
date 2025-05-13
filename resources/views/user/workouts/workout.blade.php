@extends('layouts.user.app')
@section('title', 'Today\'s Workout')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Today's Workout</h1>
            <p class="mt-1 text-sm text-gray-500">Complete your assigned exercises and track your progress</p>
        </div>

        <!-- Workout Details Card -->
        <div class="bg-white shadow-md overflow-hidden sm:rounded-lg mb-8">
            <div class="px-4 py-5 sm:px-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                <!-- $workoutTemplate->name -->
                <h2 class="text-xl font-semibold text-white">Workout Template Name</h2>
                <!-- $workoutTemplate->description -->
                <p class="mt-1 text-sm text-blue-100">Workout Template Description</p>
            </div>
            
            <!-- Exercise List -->
            <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Exercise List</h3>
                
                <div class="space-y-6 divide-y divide-gray-200">
                    <!-- Sample Exercise -->
                    <div class="pt-6 first:pt-0">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex-1">
                                <h4 class="text-lg font-medium text-gray-900 flex items-center">
                                    Barbell Bench Press
                                    @if(!empty($exercise->video_url))
                                    <a href="#" class="ml-2 text-blue-500 hover:text-blue-700" onclick="showVideo('https://www.youtube.com/embed/rT7DgCr-3pg')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    @endif
                                </h4>
                                <p class="mt-1 text-sm text-gray-500">Target muscle: Chest, Triceps, Shoulders</p>
                                <p class="mt-1 text-sm text-gray-500">Equipment: Barbell, Bench</p>
                                <p class="mt-2 text-sm text-gray-600">Press the barbell upward while lying on a bench, extending your arms fully without locking elbows.</p>
                            </div>
                            <div class="mt-4 md:mt-0 flex flex-wrap gap-3">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    4 sets
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    8-12 reps
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    90s rest
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sample Exercise 2 -->
                    <div class="pt-6">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex-1">
                                <h4 class="text-lg font-medium text-gray-900 flex items-center">
                                    Pull-ups
                                    @if(!empty($exercise->video_url))
                                    <a href="#" class="ml-2 text-blue-500 hover:text-blue-700" onclick="showVideo('https://www.youtube.com/embed/eGo4IYlbE5g')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    @endif
                                </h4>
                                <p class="mt-1 text-sm text-gray-500">Target muscle: Back, Biceps</p>
                                <p class="mt-1 text-sm text-gray-500">Equipment: Pull-up bar</p>
                                <p class="mt-2 text-sm text-gray-600">Hang from a bar and pull your body up until your chin is above the bar.</p>
                            </div>
                            <div class="mt-4 md:mt-0 flex flex-wrap gap-3">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    3 sets
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    Max reps
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    120s rest
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workout Completion Form -->
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Track Your Progress</h3>
                <!--route('workout.complete')-->
                <form method="POST" action="#">
                    @csrf
                    <!-- $userWorkoutSchedule->id -->
                    <input type="hidden" name="workout_schedule_id" value="#">
                    
                    <div class="mb-6">
                        <label for="user_notes" class="block text-sm font-medium text-gray-700 mb-1">Workout Notes</label>
                        <textarea id="user_notes" name="user_notes" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Add any notes about this workout (how you felt, any modifications, etc.)">Notes</textarea>
                    </div>
                    
                    <div class="flex justify-end gap-3">
                        <button type="submit" name="status" value="Skipped" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Skip Workout
                        </button>
                        <button type="submit" name="status" value="Completed" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Mark as Completed
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none" onclick="closeVideo()">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="w-full">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe id="video-frame" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showVideo(url) {
        document.getElementById('video-frame').src = url;
        document.getElementById('video-modal').classList.remove('hidden');
    }
    
    function closeVideo() {
        document.getElementById('video-frame').src = '';
        document.getElementById('video-modal').classList.add('hidden');
    }
</script>
@endsection