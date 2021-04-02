<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillAdvisor extends Model
{
    use SoftDeletes;
    protected $table='skilladvisor';

    function registered_students(){
        return $this->hasMany('App\User','sda_id','id');
    }
    function user(){
        return $this->hasMany('App\User','id','user_id');
    }
}

