<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkModeController extends Controller
{
    public function index()
    {
        $isDarkModeEnabled = session('dark_mode_enabled', false);
        return view('my-view', compact('isDarkModeEnabled'));
    }

    public function toggleDarkMode()
    {
        $isDarkModeEnabled = !session('dark_mode_enabled', false);
        session(['dark_mode_enabled' => $isDarkModeEnabled]);
        return back();
    }
}
