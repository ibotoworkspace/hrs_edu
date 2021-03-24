<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use SoftDeletes;
    protected $table = 'courses';
    public function chapters()
    {
        return $this->hasMany('App\Models\Chapter', 'course_id', 'id');
    }
    public function videos()
    {
        return $this->hasMany('App\Models\Course_Video', 'course_id', 'id');
    }
    public function quizes()
    {
        return $this->hasMany('App\Models\Choices', 'course_id', 'id');
    }
    public function registerCourse()
    {
        return $this->hasOne('App\Models\Course_Registered', 'course_id', 'id');
    }
    public function requestCourse()
    {
        return $this->hasOne('App\Models\CourseRequest', 'course_id', 'id');
    }
    public function group()
    {
        return $this->hasOne('App\Models\Group', 'course_id', 'id');
    }
}
