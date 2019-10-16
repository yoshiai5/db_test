<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    //timestamps利用しない
    public $timestamps = false;

    //primaryKeyの変更
    protected $primaryKey = "dept_id";

    //hasMany設定
    public function employees()
    {
        // return $this->belongsTo('App\User', 'foreign_key', 'other_key');
        // return $this->hasOne('App\Phone', 'foreign_key', 'local_key');

        return $this->hasMany('App\Employee', 'dept_id', 'dept_id');
    }
}
