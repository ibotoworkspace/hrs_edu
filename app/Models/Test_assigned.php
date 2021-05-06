<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test_assigned extends Model
{
    use SoftDeletes;
    protected $table='test_assigned';


    public function group(){
      return $this->hasOne('App\Models\Group','id','group_id');
    }
    public function group_user(){
      return $this->hasMany('App\Models\GroupUser','group_id','group_id');
    }
    public function test(){
      return $this->hasOne('App\Models\Test','id','test_id');

    }

}