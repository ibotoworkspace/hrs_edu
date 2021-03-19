<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\CourseCode;
use App\Models\CourseRequest;
use COM;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


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

        $this->add_or_update($request, $courses);

        return redirect('admin/courses');
    }
    public function edit($id)
    {

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
        $courses->price = $request->price;
        if ($request->requirments) {
            $courses->requirments = $request->requirments;
        }
        $courses->hours = $request->hours;
        $courses->overview = $request->overview;
        // $courses->lectures = $request->lectures;

        if ($request->hasFile('downloadpdf')) {
            $pdf_file = $request->downloadpdf;
            $root = $request->root();
            $courses->download_pdf = $this->move_img_get_path($pdf_file, $root, 'image');
        } else if (strcmp($request->pdf_url, "")  !== 0) {
            $courses->download_pdf = $request->pdf_url;
        }
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
        $name = $request->name ?? '';
        $courses = Courses::where('title', 'like', '%' . $name . '%')->paginate(10);
        return view('admin.courses.index', compact('courses', 'name'));
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

    public function courseRequest(Request $request)
    {
        $course_request = CourseRequest::with('course', 'user')->paginate(10);

        return view('admin.courses.request', compact('course_request'));
    }

    public function status($id)
    {
        $random = Str::random(10);
        $request_course = CourseRequest::with('user')->find($id);
        if ($request_course->can_download == 0) {
            $request_course->can_download = 1;
            $request_course->download_code = 'hrs-'.$random;
            $request_course->save();
            $new_value = 'Allowed';

            $details = [
                'to' => $request_course->user->email,
                'from' => 'contactus@hrsedu.com',
                'title' => 'HRS Academy Course Download Request ',
                'subject' => 'Course pdf code ',
                "code"  => $request_course->download_code ,
            ];
            Mail::to($request_course->user->email)->send(new CourseCode($details));
        } else {
            $request_course->can_download = 0;
            $request_course->save();
            $new_value = 'Pending';
        }

        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }
}
