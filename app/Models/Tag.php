<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function diaries()
    {
        return $this->belongsToMany('App\Models\Diary');
    }
}
