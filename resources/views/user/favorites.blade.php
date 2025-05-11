@extends('layouts.user.app')
@section('title', 'Favorites')
@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">My Favorite Food Suggestions</h1>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if(session('info'))
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">{{ session('info') }}</span>
        </div>
    @endif

    @if($favorites->isEmpty())
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <p class="text-gray-600">You haven't saved any food suggestions as favorites yet.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($favorites as $favorite)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h2 class="text-xl font-bold text-gray-800">
                                {{ $favorite->custom_name ?? $favorite->template->name }}
                            </h2>
                            <div class="flex space-x-2">
                                <button 
                                    onclick="document.getElementById('edit-modal-{{ $favorite->id }}').classList.remove('hidden')"
                                    class="text-blue-500 hover:text-blue-700"
                                    title="Edit name">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <form action="{{ route('food.favorites.remove', $favorite->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this from favorites?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" title="Remove from favorites">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">
                                Saved on {{ $favorite->saved_at->format('M d, Y') }}
                            </p>
                            @if($favorite->last_used)
                                <p class="text-sm text-gray-600">
                                    Last used: {{ $favorite->last_used->format('M d, Y') }}
                                </p>
                            @endif
                        </div>
                        
                        <div class="mb-4">
                            <h3 class="font-medium text-gray-700 mb-2">Food Items:</h3>
                            <ul class="list-disc list-inside text-gray-600">
                                @foreach($favorite->template->foodItems as $item)
                                    <li>{{ $item->food->name }} - {{ $item->quantity }} {{ $item->unit }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="flex justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 transition">
                                View Details
                            </a>
                            
                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 transition">
                                    Use Suggestion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal for {{ $favorite->id }} -->
                <div id="edit-modal-{{ $favorite->id }}" class="hidden fixed inset-0 overflow-y-auto z-50 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
                        <h3 class="text-lg font-bold mb-4">Edit Custom Name</h3>
                        <form action="{{ route('food.favorites.update-name', $favorite->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-4">
                                <label for="custom_name" class="block text-gray-700 mb-2">Custom Name:</label>
                                <input type="text" id="custom_name" name="custom_name" value="{{ $favorite->custom_name ?? $favorite->template->name }}" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex justify-end space-x-3">
                                <button type="button" onclick="document.getElementById('edit-modal-{{ $favorite->id }}').classList.add('hidden')" 
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                    Cancel
                                </button>
                                <button type="submit" 
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection