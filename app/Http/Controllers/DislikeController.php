<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\DisLike;
use Illuminate\Support\Facades\Auth;

class DislikeController extends Controller
{
    public function dislike(Sneaker $sneaker)
    {
        if ($sneaker->user_id === Auth::user()->id) {
            return back()->with('error', 'Vous ne pouvez pas ne pas aimer vos propres sneakers.');
        }

        if (DisLike::where('user_id', Auth::user()->id)->where('sneaker_id', $sneaker->id)->exists()) {
            return back()->with('error', 'Vous avez déjà pas aimé cette sneaker.');
        }

        $like = new DisLike();
        $like->user_id = Auth::user()->id;
        $like->sneaker_id = $sneaker->id;
        $like->save();

        $sneaker->increment('dislikes');

        return back()->with('success', 'Vous n\'avez pas aimé cette sneaker.');
    }
}
