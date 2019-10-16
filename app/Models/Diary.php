<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    //

    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withPivot('like_flag');
    }
}
