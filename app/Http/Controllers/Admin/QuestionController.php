<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Quiz;
use App\Models\Choices;
use App\Models\Courses;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Libraries\ExportToExcel;
use Maatwebsite\Excel\Concerns\ToArray;

class QuestionController extends Controller
{
    public function index($id)
    {
        // $name = $request->name ?? '';
        $test_id = $id;
        $question = Quiz::where('test_id', $id)->orderByDesc('created_at')->paginate(10);
        return view('admin.question.index', compact('question', 'test_id'));
    }

    public function create($test_id)
    {
        $control = 'create';
        $quiz = new Quiz();

        // dd($course);
        return view('admin.question.create', compact('control', 'quiz', 'test_id'));
    }

    public function save(Request $request)
    {
        // dd($request->all());
        $quiz = new Quiz();
        $this->add_or_update($request, $quiz);

        // return redirect('admin/question');
        return Redirect('admin/question/' . $request->test_id);
    }

    public function edit($id)
    {
        $control = 'edit';
        $quiz = Quiz::with('choice')->find($id);
        $test_id  =  $quiz->test_id;
        return \View::make('admin.question.create', compact(
            'control',
            'quiz',
            'test_id'
        ));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $question = Quiz::with('choice')->find($id);
        // $courses = Courses::find($id);
        $this->add_or_update($request, $question);
        return redirect('admin/question/' . $request->test_id);
    }


    public function add_or_update(Request $request, $quiz)
    {

        $quiz->question = $request->question;
        $quiz->test_id = $request->test_id;

        $quiz->question_type = $request->question_type;
        $quiz->save();
        
        if($quiz->choice){
            $ids = [];
            foreach($quiz->choice as $c){
               $ids []= $c->id;
            }
            $choice = Choices::destroy($ids);
        }        
        //    dd($request->all());
        foreach ($request->choices as $key => $ch) {
            $choice = new Choices();
            $choice->choice = $ch;
            $choice->quiz_id = $quiz->id;
            $choice->is_correct = in_array(($key+1),$request->correct_choice);
            $choice->save();
        }


        $quiz->save();

        return redirect()->back();
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
}
