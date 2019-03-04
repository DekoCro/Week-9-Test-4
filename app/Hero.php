<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
