<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FoodSuggestionTemplate;
use App\Models\UserFavoriteSuggestion;

class FoodSuggestionController extends Controller
{
    /**
     * Save a food suggestion template as a user favorite
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveFavorite(Request $request)
    {
        $request->validate([
            'template_id' => 'required|exists:food_suggestion_templates,id',
            'custom_name' => 'nullable|string|max:255',
        ]);
        
        $user = Auth::user();
        $templateId = $request->input('template_id');
        $customName = $request->input('custom_name');
        
        // Check if already favorited
        $existing = UserFavoriteSuggestion::where('user_id', $user->id)
            ->where('template_id', $templateId)
            ->first();
            
        if (!$existing) {
            // Create new favorite
            UserFavoriteSuggestion::create([
                'user_id' => $user->id,
                'template_id' => $templateId,
                'saved_at' => now(),
                'custom_name' => $customName,
                'last_used' => null, // Initially not used
            ]);
            
            return back()->with('success', 'Food suggestion saved to favorites!');
        }
        
        // If it exists but custom name is being updated
        if ($customName && $existing->custom_name !== $customName) {
            $existing->update([
                'custom_name' => $customName
            ]);
            return back()->with('success', 'Custom name updated for this favorite.');
        }
        
        return back()->with('info', 'This suggestion is already in your favorites.');
    }
    
    /**
     * Display user's favorite food suggestions
     *
     * @return \Illuminate\Http\Response
     */
    public function favorites()
    {
        $user = Auth::user();
        
        $favorites = UserFavoriteSuggestion::where('user_id', $user->id)
            ->with(['template', 'template.foodItems', 'template.foodItems.food'])
            ->orderBy('saved_at', 'desc')
            ->get();
            
        return view('user.favorites', compact('favorites', 'user'));
    }
    
    /**
     * Remove a suggestion from favorites
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function removeFavorite($id)
    {
        $user = Auth::user();
        
        $favorite = UserFavoriteSuggestion::where('id', $id)
            ->where('user_id', $user->id)
            ->first();
            
        if ($favorite) {
            $favorite->delete();
            return back()->with('success', 'Suggestion removed from favorites.');
        }
        
        return back()->with('error', 'Favorite not found.');
    }
    
    /**
     * Mark a favorite suggestion as used
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function markAsUsed($id)
    {
        $user = Auth::user();
        
        $favorite = UserFavoriteSuggestion::where('id', $id)
            ->where('user_id', $user->id)
            ->first();
            
        if ($favorite) {
            $favorite->update([
                'last_used' => now()
            ]);
            return back()->with('success', 'Suggestion marked as used.');
        }
        
        return back()->with('error', 'Favorite not found.');
    }
    
    /**
     * Update custom name for a favorite suggestion
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateCustomName(Request $request, $id)
    {
        $request->validate([
            'custom_name' => 'required|string|max:255',
        ]);
        
        $user = Auth::user();
        
        $favorite = UserFavoriteSuggestion::where('id', $id)
            ->where('user_id', $user->id)
            ->first();
            
        if ($favorite) {
            $favorite->update([
                'custom_name' => $request->input('custom_name')
            ]);
            return back()->with('success', 'Custom name updated.');
        }
        
        return back()->with('error', 'Favorite not found.');
    }
}