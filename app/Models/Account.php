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

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function parentCategories()
    {
        return $this->belongsToMany('App\Category');
    }
}
