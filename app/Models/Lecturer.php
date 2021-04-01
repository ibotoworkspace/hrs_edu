<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{

    use SoftDeletes;
    protected $table = 'lecturer';


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
