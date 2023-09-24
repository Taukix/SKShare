<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Sneaker $sneaker)
    {
        if ($sneaker->user_id === Auth::user()->id) {
            return back()->with('error', 'Vous ne pouvez pas aimer vos propres sneakers.');
        }

        if (Like::where('user_id', Auth::user()->id)->where('sneaker_id', $sneaker->id)->exists()) {
            return back()->with('error', 'Vous avez déjà aimé cette sneaker.');
        }

        $like = new Like();
        $like->user_id = Auth::user()->id;
        $like->sneaker_id = $sneaker->id;
        $like->save();

        $sneaker->increment('likes');

        return back()->with('success', 'Vous avez aimé cette sneaker.');
    }
}
