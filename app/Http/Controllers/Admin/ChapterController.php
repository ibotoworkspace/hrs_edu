<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use COM;
use App\Models\Chapter;
use App\Models\Courses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\libraries\ExportToExcel;
use Maatwebsite\Excel\Facades\Excel;
use PDF;



class ChapterController extends Controller
{
    public function index(Request $request, $id)
    {
        // dd($id);
        $name = $request->name ?? '';

        $chapter = Chapter::where('title', 'like', '%' . $name . '%')->where('course_id', $id)->paginate(10);
        $courses = Courses::find($id);
        // dd( $courses);
        return view('admin.chapter.index', compact('chapter', 'courses'));
    }

    public function create($id)
    {
        $control = 'create';
        $courses =  Courses::find($id);


        return \View::make(
            'admin.chapter.create',
            compact('control', 'courses')
        );
    }


    public function save(Request $request)
    {
        $chapter = new Chapter();
        $this->add_or_update($request, $chapter);
        return $this->index($request, $request->course_id);
    }
    public function edit($id)
    {

        $control = 'edit';
        $chapter = Chapter::find($id);


        return view('admin.chapter.create', compact(
            'control',
            'chapter',

        ));
    }

    public function update(Request $request, $id)
    {
        $chapter = Chapter::find($id);

        $this->add_or_update($request, $chapter);

        return $this->index($request, $request->course_id);
    }


    public function add_or_update($request, $chapter)
    {

        $chapter->title = $request->title;
        $chapter->description = $request->description;
        $chapter->is_paid = $request->is_paid;
        $chapter->course_level = $request->level;
        $chapter->course_id = $request->course_id;

        $chapter->lecture = $request->lecture;
        $chapter->save();
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


    public function index_excel(Request $request)
    {
        $chapters = Courses::orderBy('id', 'DESC')->get();
        // dd( $quiz);
        // dd($chapters);
        $view =  view('admin.chapter.export', compact('chapters'));
        //  dd( $view);

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $chapters = Courses::orderBy('id', 'DESC')->get();
        $view =  view('admin.chapter.export', compact('chapters'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $chapters = Chapter::orderBy('id', 'DESC')->get();
        $pdf = PDF::loadView('admin.chapter.export', compact('chapters', 'type'));

        return $pdf->download('HRS-course-list.pdf');
    }
}
