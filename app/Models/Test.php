<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    protected $table = 'test';


    public function test_assign(){
        return $this->hasOne('App\Models\Test_assigned','test_id','id');
  
      }
}
