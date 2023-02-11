<?php

namespace HaroonMahmood4276\LaravelCommandsHistory\Listeners;

use Illuminate\Console\Events\CommandStarting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class ArtisanCommandStartingListener
{
    /**
     * Handle the CommandStarting event.
     *
     * @param  CommandStarting  $event
     * @return void
     */
    public function handle(CommandStarting $event)
    {

    }
}
