<?php

namespace App\Listeners;

use App\Events\UserRegisterdEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationLisnter
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
    public function handle(UserRegisterdEvent $event): void
    {
        $admin = User::where('role', 'admin')->first();
        $admin->notify(new \App\Notifications\UserRegisterdNotification($event->user));
    }
}
