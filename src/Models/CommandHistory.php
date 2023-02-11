<?php

namespace HaroonMahmood4276\LaravelCommandsHistory\Models;

use Illuminate\Database\Eloquent\Model;

class CommandHistory extends Model
{
    protected $dateFormat = 'U';

    protected $fillable = [
        'name',
        'exit_code',
        'arguments',
        'options',
    ];

    protected $casts = [
        'exit_code' => 'integer',
        'arguments' => 'array',
        'options' => 'array',
    ];
}
