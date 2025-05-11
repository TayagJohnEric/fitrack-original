<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class PreferencesController extends Controller
{
    
  public function index()
  {
    $user = Auth::user();
    return view('admin.preferences.preferences', compact('user'));
  }

}
