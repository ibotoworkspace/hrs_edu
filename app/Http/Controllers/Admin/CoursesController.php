<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use COM;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;


class CoursesController extends Controller
{
    // function list()
    // {
    //     return view('admin.courses.index');
    // }

    function ListofCourses()
    {
        return view('admin.ListofCourses.index');
    }
    // function Listofquiz()
    // {
    //     return view('admin.Listofquiz.index');
    // }
  

    function  addmaincourse()
    {
        return view('admin.addmaincourse.index');
    }
        function  newquizquestion()
        {
            return view('admin.newquizquestion.index');
        }
  

     
        function  listofpromocode()
        {
            return view('admin.listofpromocode.index');
        }
  

        function  listoforder()
        {
            return view('admin.listoforder.index');
        }
  

        function  listofmembership()
        {
            return view('admin.listofmembership.index');
        }
  

        function  ticket()
        {
            return view('admin.ticket.index');
        }
        

        function  newpromocode()
        {
            return view('admin.newpromocode.index');
        }

   
        function    userperformance()
        {
            return view('admin.userperformance.index');
        }
        

///////////////crud course............................




      public function index(Request $request)
    {


        $courses = Courses::paginate(10);
     
        return view('admin.courses.index', compact('courses'));

    }

    public function create()
    {
        $control = 'create';
      

        return \View::make(
            'admin.courses.create',
            compact('control')
        );
    }


    public function save(Request $request)
    {
        $courses = new Courses();
       
        $this->add_or_update($request , $courses);

        return redirect('admin/courses');
        
    }
    public function edit($id)
    {

        // dd($id);

        $control = 'edit';
       $courses = Courses::find($id);
        return \View::make('admin.courses.create', compact(
            'control',
            'courses'
           
        ));
    }

    public function update(Request $request, $id)
    {
        $courses = Courses::find($id);
      
        $this->add_or_update($request, $courses);
        return Redirect('admin/courses');
    }


    public function add_or_update($request, $courses)
    {
        $courses->title = $request->title;
        // $courses->detail = $request->detail;
        // $courses->requirments = $request->requirments;
        $courses->hours = $request->hours;
        // $courses->lectures = $request->lectures;

      
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $courses->avatar = $this->move_img_get_path($avatar, $root, 'image');
        } else if (strcmp($request->avatar_visible, "")  !== 0) {
            $courses->avatar = $request->avatar_visible;
        }


    
        $courses->save();
      
        return redirect()->back();
    }



    public function search(Request $request)

 {


    
// dd($request->all());
        $name = $request->name ?? '';
        // dd($name);
        $courses = Courses::where('title', 'like', '%' . $name . '%')->paginate(10);     
        return view('admin.courses.index', compact('courses','name'));
 
    }

    

       public function destroy_undestroy($id)
    {

        $courses = Courses::find($id);
        if ($courses) {
            Courses::destroy($id);
            $new_value = 'Activate';
        } else {
            Courses::withTrashed()->find($id)->restore();
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
