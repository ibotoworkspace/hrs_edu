<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use SoftDeletes;
    protected $table='chapter';


    public function course(){
        return $this->hasOne('App\Models\Courses','id','course_id');
    }
}
