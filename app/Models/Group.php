<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;
    protected $table = 'group';


    public function lecturer()
    {
        return $this->hasOne('App\Models\Lecturer', 'id', 'lecturer_id');
    }
    public function course()
    {
        return $this->hasOne('App\Models\Courses', 'id', 'course_id');
    }
    public function groupUser()
    {
        return $this->hasMany('App\Models\GroupUser', 'group_id', 'id');
    }
}
