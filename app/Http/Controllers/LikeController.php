<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Events\UserTakesFirstPlace;
use Illuminate\Support\Facades\Event;

class LikeController extends Controller
{
    public function like(Sneaker $sneaker)
    {
        $this->authorize('likeDislike', $sneaker);
        
        if ($sneaker->likedByUsers->contains(Auth::user()->id)) {
            $like = Like::where('user_id', Auth::user()->id)->where('sneaker_id', $sneaker->id)->first();
            $like->delete();
            $sneaker->decrement('likes');

            $likes = $sneaker->likes;

            return response()->json(['success' => true, 'likes' => $likes]);
        } else {
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->sneaker_id = $sneaker->id;
            $like->save();
            $sneaker->increment('likes');

            $likes = $sneaker->likes; // Nombre total de likes

            return response()->json(['success' => true, 'likes' => $likes]);
        }
    }
}
