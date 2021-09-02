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
use App\libraries\ExportToExcel;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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


    // function  newpromocode()
    // {
    //     return view('admin.newpromocode.index');
    // }


    function    userperformance()
    {
        return view('admin.userperformance.index');
    }




    public function index(Request $request)
    {
        $courses = Courses::orderBy('created_at', 'DESC')->paginate(10);
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
        // dd($request->all());

        $courses = new Courses();

        $this->add_or_update($request, $courses);

        return redirect('admin/courses');
    }
    public function edit($id)
    {
        // dd($id);

        $control = 'edit';
        $courses = Courses::find($id);
        // dd($courses);
        return view('admin.courses.create', compact(
            'control',
            'courses'

        ));

    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $courses = Courses::find($id);

        $this->add_or_update($request, $courses);
        return Redirect('admin/courses');
    }


    public function add_or_update($request, $courses)
    {

        $courses->title = $request->title;
        $courses->price = $request->price;
       $courses->is_paid = $request->is_paid;
        if ($request->requirments) {
            $courses->requirments = $request->requirments;
        }
        if ($request->learning_path) {
            $courses->learning_path  = $request->learning_path;
        }
        if ($request->is_popular) {
            $courses->is_popular  = $request->is_popular;
        }
        else{

            $courses->is_popular  =0;

        }

        $courses->hours = $request->hours;
        $courses->overview = $request->overview;
        // $courses->lectures = $request->lectures;

        // if ($request->hasFile('downloadpdf')) {
        //     $pdf_file = $request->downloadpdf;
        //     $root = $request->root();
        //     $courses->download_pdf = $this->move_img_get_path($pdf_file, $root, 'image');
        // } else if (strcmp($request->pdf_url, "")  !== 0) {
        //     $courses->download_pdf = $request->pdf_url;
        // }
        sleep(1);
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $courses->avatar = $this->move_img_get_path($avatar, $root, 'image');
        } else if (strcmp($request->avatar_visible, "")  !== 0) {
            $courses->avatar = $request->avatar_visible;
        }
        sleep(1);
        if ($request->hasFile('badge')) {
            $course_badge = $request->badge;
            $root = $request->root();
            $courses->badge = $this->move_img_get_path($course_badge, $root, 'image');
        }
        // if ($request->hasFile('book_avatar')) {
        //     $book_avatar = $request->book_avatar;
        //     $root = $request->root();
        //     $courses->book_avatar = $this->move_img_get_path($book_avatar, $root, 'image');
        // }

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
        $course_request = CourseRequest::with('ebook', 'user')->paginate(10);

        return view('admin.courses.request', compact('course_request'));
    }

    public function status($id)
    {
        $random = Str::random(10);
        $request_course = CourseRequest::with('user')->find($id);
        if ($request_course->can_download == 0) {
            $request_course->can_download = 1;
            $request_course->download_code = 'hrs-' . $random;
            $request_course->save();
            $new_value = 'Allowed';

            $details = [
                'to' => $request_course->user->email,
                'from' => 'contactus@hrsedu.com',
                'title' => 'HRS Academy Course Download Request ',
                'subject' => 'Course pdf code ',
                "code"  => $request_course->download_code,
            ];
            // Mail::to($request_course->user->email)->send(new CourseCode($details));
        } else {
            $request_course->can_download = 0;
            $request_course->save();
            $new_value = 'Pending';
        }
        return redirect()->back();

        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function index_excel(Request $request)
    {
        $courses = Courses::orderBy('id', 'DESC')->get();
        $view =  view('admin.courses.export', compact('courses'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $courses = Courses::orderBy('id', 'DESC')->get();
        $view =  view('admin.courses.export', compact('courses'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $courses = Courses::orderBy('id', 'DESC')->get();
        $pdf = PDF::loadView('admin.courses.export', compact('courses', 'type'));

        return $pdf->download('HRS-course-list.pdf');
    }
}
