<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Score;

class UserScoreController extends Controller
{
    function userscore()
    {
      
 
    $userscore = User_Score::paginate(10);
   
    return view('user.userscore.index', compact('userscore'));

}




}

