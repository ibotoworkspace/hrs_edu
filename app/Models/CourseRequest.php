<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseRequest extends Model
{
    use SoftDeletes;
    protected $table = 'request_course';


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function course()
    {
        return $this->hasOne('App\Models\Courses', 'id','course_id');
    }

}
