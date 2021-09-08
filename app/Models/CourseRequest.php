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
    public function ebook()
    {
        return $this->hasOne('App\Models\Ebooks', 'id','ebook_id');
    }

}
