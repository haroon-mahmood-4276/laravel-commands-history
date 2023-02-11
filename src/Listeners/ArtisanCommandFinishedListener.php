<?php

namespace HaroonMahmood4276\LaravelCommandsHistory\Listeners;

use HaroonMahmood4276\LaravelCommandsHistory\Models\CommandHistory;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Schema;

class ArtisanCommandFinishedListener
{
    /**
     * Handle the CommandFinished event.
     *
     * @param  CommandFinished  $event
     * @return void
     */
    public function handle(CommandFinished $event)
    {

        if (Schema::hasTable('command_histories')) {

            if (!is_null($event->command)) {

                $data = [
                    'name' => $event->command,
                    'exit_code' => $event->exitCode,
                    'arguments' => $event->input->getArguments(),
                    'options' => $event->input->getOptions(),
                ];

                CommandHistory::create($data);
            }
        }
    }
}
