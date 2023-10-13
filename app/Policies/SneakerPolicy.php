<?php

namespace App\Policies;

use App\Models\Sneaker;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

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

    public function like(User $user, Sneaker $sneaker): Response
    {
        if ($user !== Auth::user()) {
            return Response::deny('Vous devez être connecté pour aimer une sneaker.');
        } 
        return $user->id !== $sneaker->user_id && $sneaker->likes->contains('user_id', $user->id)
                ? Response::allow()
                : Response::deny('Vous ne pouvez pas aimer vos propres sneakers ou aimer plusieurs fois la même sneaker.');
    }

    public function dislike(User $user, Sneaker $sneaker): Response
    {
        if ($user !== Auth::user()) {
            return Response::deny('Vous devez être connecté pour détester une sneaker.');
        } 
        return $user->id !== $sneaker->user_id && $sneaker->dislikes->contains('user_id', $user->id)
                ? Response::allow()
                : Response::deny('Vous ne pouvez pas détester vos propres sneakers ou détester plusieurs fois la même sneaker.');
    }

    public function connected(User $user): Response
    {
        return $user === Auth::user()
                ? Response::allow()
                : Response::deny('Vous devez être connecté pour voir votre dashboard.');
    }
}
