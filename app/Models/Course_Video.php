<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course_Video extends Model
{
    use SoftDeletes;
    protected $table='course_video';

    public function course(){
        return $this->hasOne('App\Models\Courses','id','course_id');
    }
    
}
