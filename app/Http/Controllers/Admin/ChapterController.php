<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use COM;

use App\models\Chapter;
use App\models\Courses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

class ChapterController extends Controller
{
   public function index(Request $request ,$id)
    {
        $name = $request->name ?? '';

        $chapter = Chapter::where('title', 'like', '%' . $name . '%')->where('course_id',$id)->paginate(10);
        $courses = Courses::find($id);
        
        return view('admin.chapter.index', compact('chapter','courses'));

    }

    public function create( $id )
    {
        $control = 'create';
        $courses =  Courses::find($id);
      

        return \View::make(
            'admin.chapter.create',
            compact('control','courses')
        );
    }


    public function save(Request $request)
    {
        $chapter = new Chapter();    
        $this->add_or_update($request , $chapter);

        return $this->index($request,$request->course_id);
        
    }
    public function edit($id)
    {

        $control = 'edit';
        
        return \View::make('admin.courses.create', compact(
            'control',
           
        ));
    }

    public function update(Request $request, $id)
    {
        $courses = Courses::find($id);
      
        $this->add_or_update($request, $courses);
        return Redirect('admin/courses');
    }


    public function add_or_update($request, $chapter)
    {
        $chapter->title = $request->title;
        $chapter->description = $request->description;
        $chapter->is_paid = $request->paid;
        $chapter->course_level = $request->level;
        $chapter->course_id = $request->course_id;
        
        // $chapter->lecture = $request->lectures;
        $chapter->save();
      
        return redirect()->back();
    }
       public function destroy_undestroy($id)
    {

        $chapter = Chapter::find($id);
        if ($chapter) {
            Chapter::destroy($id);
            $new_value = 'Activate';
        } else {
            Chapter::withTrashed()->find($id)->restore();
            $new_value = 'Delete';
        }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.delete'),
            'new_value' => $new_value
        ]);
        return $response;
    }

   




}

