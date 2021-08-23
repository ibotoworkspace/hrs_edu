<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Courses;
use App\Models\Quiz;
use App\libraries\ExportToExcel;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class ListofQuizController extends Controller
{


    public function index($id)
    {
        $couse_id = $id;
        $listofquiz = Quiz::where('course_id', $id)->paginate(10);
        return view('admin.listofquiz.index', compact('listofquiz', 'couse_id'));
    }

    public function create($course_id)
    {
        $quiz = new Quiz();
        $control = 'create';
        return view('admin.listofquiz.create',compact('control', 'course_id','quiz')
        );
    }


    public function save(Request $request)
    {

        $this->add_or_update($request);
        return redirect('admin/listofquiz/' . $request->course_id);
        // return $this->index($request->course_id);
    }
    public function edit($id)
    {
        $control = 'edit';
        $quiz = Quiz::with('choice')->find($id);
        $course_id  =  $quiz->course_id;
        return view('admin.listofquiz.create', compact(
            'control',
            'quiz',
            'course_id'
        ));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // Quiz::find($id)->delete();
        Quiz::destroy($id);
        // $courses = Courses::find($id);
        $this->add_or_update($request);
        return redirect('admin/listofquiz/' . $request->course_id);
    }


    public function add_or_update($request)
    {

        $quiz = new Quiz();
        $quiz->question = $request->question;
        $quiz->course_id = $request->course_id;
        $quiz->save();
        //    dd($request->all());
        foreach ($request->choices as $key => $ch) {
            $choice = new Choices();
            $choice->choice = $ch;
            $choice->quiz_id = $quiz->id;
            $choice->is_correct = $key == $ch[$request->correct_choice - 1] ? 1 : 0;
            $choice->save();
        }
    }



    public function destroy_undestroy($id)
    {
        $quiz = Quiz::find($id);
        if ($quiz) {
            Quiz::destroy($id);
            $new_value = 'Activate';
        } else {
            Quiz::withTrashed()->find($id)->restore();
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
        $quiz = Quiz::orderBy('id', 'DESC')->get();
        // dd( $quiz);
        $view =  view('admin.listofquiz.export', compact('quiz'));
        //  dd( $view);

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $quiz = Quiz::orderBy('id', 'DESC')->get();
        $view =  view('admin.listofquiz.export', compact('quiz'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'course.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $quiz = Quiz::orderBy('id', 'DESC')->get();
        $pdf = PDF::loadView('admin.listofquiz.export', compact('quiz', 'type'));

        return $pdf->download('HRS-course-list.pdf');
    }
}
