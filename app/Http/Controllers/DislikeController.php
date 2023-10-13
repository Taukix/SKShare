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
        $this->authorize('likeDislike', $sneaker);

        if ($sneaker->dislikedByUsers->contains(Auth::user()->id)) {
            $dislike = Dislike::where('user_id', Auth::user()->id)->where('sneaker_id', $sneaker->id)->first();
            $dislike->delete();
            $sneaker->decrement('dislikes');

            $dislikes = $sneaker->dislikes;

            return response()->json(['success' => true, 'dislikes' => $dislikes]);
        } else {
            $dislike = new Dislike();
            $dislike->user_id = Auth::user()->id;
            $dislike->sneaker_id = $sneaker->id;
            $dislike->save();
            $sneaker->increment('dislikes');

            $dislikes = $sneaker->dislikes;

            return response()->json(['success' => true, 'dislikes' => $dislikes]);
        }
    }
}
