<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        try {
            $user = $request->get('user');
            $items_count = $request->items_count ?? '10000';
            $search = $request->course_name ?? '';
            $courses=Courses::where('title', 'like', '%' . $search . '%')->with(['registerCourse'=> function($q) use($user){
                $q->where('user_id',$user->id);
            }])->orderBy('created_at','desc')->paginate($items_count);

            return $this->sendResponse(200, $courses);
            
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
