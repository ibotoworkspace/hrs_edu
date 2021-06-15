<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ebooks extends Model
{
    use SoftDeletes;
    protected $table = 'ebooks';

    public function course()
    {
        return $this->hasOne('App\Models\Courses', 'id','course_id');
    }
    public function requestCourse()
    {
        return $this->hasOne('App\Models\CourseRequest', 'ebook_id', 'id');
    }
}
