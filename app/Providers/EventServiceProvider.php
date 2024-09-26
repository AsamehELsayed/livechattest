<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserRegisterdEvent;
use App\Listeners\SendNotificationLisnter;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserRegisterdEvent::class => [
            SendNotificationLisnter::class,
        ],
    ];
    public function boot()
    {
        parent::boot();
    }
}
