<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupUser extends Model
{
    use SoftDeletes;
    protected $table = 'group_user';


     public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
