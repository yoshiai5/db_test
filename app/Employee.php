<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //timestamps利用しない
    public $timestamps = false;

    //belongsTo設定
    public function dept()
    {
        // return $this->belongsTo('App\User', 'foreign_key', 'other_key');
        // return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
        return $this->belongsTo('App\Dept', 'dept_id', 'dept_id');
    }
}
