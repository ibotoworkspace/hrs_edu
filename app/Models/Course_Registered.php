<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course_Registered extends Model
{
    use SoftDeletes;
    protected $table = 'student_course_registered';

    public function course()
    {
        return $this->hasOne('App\Models\Courses', 'id', 'course_id');
    }
}
