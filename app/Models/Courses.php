<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use SoftDeletes;
    protected $table='courses';
    public function videos(){
        return $this->hasMany('App\Models\Course_Video','course_id','id');
    }
    public function quizes(){
        return $this->hasMany('App\Models\Choices','course_id','id');
    }
}
