<?php

namespace HaroonMahmood4276\LaravelCommandsHistory;

use Illuminate\Support\ServiceProvider;

class CommandHistoryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
    }
}
