<?php

namespace App\Listeners;

use App\Events\UserTakesFirstPlace;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class SendFirstPlaceEmailNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserTakesFirstPlace $event): void
    {
        $user = $event->user;

        $users = User::with('sneakers')->get();
        $firstPlace = $users->sortByDesc(function ($user) {
            return $user->sneakers->count();
        })->first();

        if ($user->id === $firstPlace->id) {
            $mailMessage = (new Mailable)
                ->subject('Vous êtes premier!')
                ->view('emails.firstplace', ['user' => $user]);

            Mail::to($user->email)->send($mailMessage);
        }
    }
}
