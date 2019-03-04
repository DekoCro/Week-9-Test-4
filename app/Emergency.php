<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    public $fillable = [
        'subject',
        'description'
    ];
}
