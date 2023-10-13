<?php

namespace App\Listeners;

use App\Events\UserFirstSneaker;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class SendFirstSneakerEmailNotification
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
    public function handle(UserFirstSneaker $event): void
    {
        $user = $event->user;

        $mailMessage = (new Mailable)
            ->subject('Votre première paire de sneakers sur SkShare !')
            ->view('emails.firstSneaker', ['user' => $user]);
        Mail::to($user->email)->send($mailMessage);
    }
}
