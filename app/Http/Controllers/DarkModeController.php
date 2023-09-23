<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkModeController extends Controller
{
    public function toggleDarkMode(Request $request)
    {
        $darkMode = $request->session()->get('dark_mode', false);

        $darkMode = !$darkMode;

        $request->session()->put('dark_mode', $darkMode);

        return back();
    }
}
