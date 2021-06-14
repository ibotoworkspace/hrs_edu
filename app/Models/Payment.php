<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $table = 'payment';


    public function registerCourse(){
        return $this->hasOne('App\Models\Course_Registered','id','course_register_id');
    }
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }
    public function promocode(){
        return $this->hasOne('App\Models\PromoCode','id','promocode_id');
    }
}
