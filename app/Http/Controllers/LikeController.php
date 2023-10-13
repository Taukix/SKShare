<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Sneaker $sneaker)
    {
        $this->authorize('likeDislike', $sneaker);

        if ($sneaker->likedByUsers->contains(Auth::user()->id)) {
            $like = Like::where('user_id', Auth::user()->id)->where('sneaker_id', $sneaker->id)->first();
            $like->delete();
            $sneaker->decrement('likes');

            return back()->with('success', 'Vous n\'aimez plus cette sneaker.');
        } else {
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->sneaker_id = $sneaker->id;
            $like->save();
            $sneaker->increment('likes');

            return back()->with('success', 'Vous avez aimé cette sneaker.');
        }
    }
}
