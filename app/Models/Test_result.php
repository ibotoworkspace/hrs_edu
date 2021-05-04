<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test_result extends Model
{
    use SoftDeletes;
    protected $table = 'userquiz_result';


    public function test(){
    return $this->hasMany('App\Models\Test','id','test_id');

    }
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }




}