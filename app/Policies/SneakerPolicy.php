<?php

namespace App\Policies;

use App\Models\Sneaker;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;
use App\Models\Like;
use App\Models\Dislike;

class SneakerPolicy
{

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sneaker $sneaker): Response
    {
        return $user->id === $sneaker->user_id
                ? Response::allow()
                : Response::deny('Vous ne possédez pas cette sneaker.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sneaker $sneaker): Response
    {
        return $user->id === $sneaker->user_id
                ? Response::allow()
                : Response::deny('Vous ne possédez pas cette sneaker.');
    }

    public function connexion(): Response
    {
        return Auth::check()
                ? Response::allow()
                : Response::deny('Vous devez être connecté pour effectuer cette action.');
    }

    public function likeDislike(User $user, Sneaker $sneaker): Response
    {
        return $user->id !== $sneaker->user_id
                ? Response::allow()
                : Response::deny('Vous ne pouvez pas liker/disliker votre propre sneaker.');
    }
}
