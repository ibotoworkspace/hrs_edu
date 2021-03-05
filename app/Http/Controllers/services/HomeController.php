<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        try {
            $items_count = $request->items_count ?? '10';
            $search = $request->course_name ?? '';
            $courses=Courses::where('title', 'like', '%' . $search . '%')->orderBy('created_at','desc')->paginate($items_count);

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
