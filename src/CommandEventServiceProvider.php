<?php

namespace HaroonMahmood4276\LaravelCommandsHistory;

use HaroonMahmood4276\LaravelCommandsHistory\Listeners\ArtisanCommandFinishedListener;
use HaroonMahmood4276\LaravelCommandsHistory\Listeners\ArtisanCommandStartingListener;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class CommandEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        CommandStarting::class => [
            ArtisanCommandStartingListener::class
        ],
        CommandFinished::class => [
            ArtisanCommandFinishedListener::class
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
