<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\models\Courses;
use App\Models\Quiz;


class ListofQuizController extends Controller
{


    public function index($id)
    {

        //  dd($request->all());
        // $listofquiz = Quiz::paginate(10);
        $couse_id = $id;
        $listofquiz = Quiz::where('course_id', $id)->paginate(10);
        return view('admin.listofquiz.index', compact('listofquiz', 'couse_id'));
    }

    public function create($course_id)
    {
        $control = 'create';
        return \View::make(
            'admin.listofquiz.create',
            compact('control', 'course_id')
        );
    }


    public function save(Request $request)
    {

        //    dd($request->all());
        $quiz = new Quiz();

        // $course = new Courses();
        $this->add_or_update($request, $quiz);
        return redirect('admin/listofquiz/'.$request->course_id);
        // return $this->index($request->course_id);
    }
    // public function edit($id)
    // {

    //     $control = 'edit';
    //     $courses = Courses::find($id);

    //     return \View::make('admin.quiz.create', compact(
    //         'control',
    //         'courses'

    //     ));
    // }

    // public function update(Request $request, $id)
    // {
    //     $quiz = Quiz::find($id);
    //     $courses = Courses::find($id);

    //     $this->add_or_update($request, $quiz,$courses);
    //     return Redirect('admin/quiz');
    // }


    public function add_or_update(Request $request, $quiz)
    {


        $quiz->question = $request->question;
        $quiz->course_id = $request->course_id;
        $quiz->save();
        //    dd($request->all());
        foreach ($request->choices as $key => $ch) {
            $choice = new Choices();
            $choice->choice = $ch;
            $choice->quiz_id = $quiz->id;
            $choice->is_correct = $key == $ch[$request->correct_choice - 1] ?1:0;
            $choice->save();
        }



        // return redirect()->back();
        // return $this->index($request->course_id);
    }



    //    public function destroy_undestroy($id)
    // {

    //     $quiz = Quiz::find($id);
    //     if ($quiz) {
    //         Quiz::destroy($id);
    //         $new_value = 'Activate';
    //     } else {
    //         Quiz::withTrashed()->find($id)->restore();
    //         $new_value = 'Delete';
    //     }
    //     $response = Response::json([
    //         "status" => true,
    //         'action' => Config::get('constants.ajax_action.delete'),
    //         'new_value' => $new_value
    //     ]);
    //     return $response;
    // }




}
