<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //

    public function diaries()
    {
        return $this->hasMany('App\Models\Diary');
    }
}
