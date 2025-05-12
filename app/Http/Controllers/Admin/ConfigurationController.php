<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConfigurationController extends Controller
{
    public function index()
  {
    $user = Auth::user();
    return view('admin.configurations.configuration', compact('user'));
  }

}
