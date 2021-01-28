<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_Score extends Model
{
    use SoftDeletes;
    protected $table='user_score';
}
