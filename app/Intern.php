<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'name', 'email', 'slack_username', 'points',
    ];
}
