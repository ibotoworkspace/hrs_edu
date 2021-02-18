<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\models\Courses;
use App\Models\Quiz;


class QuizController extends Controller
{
    

    public function index(Request $request)
    {


        $quiz = Quiz::paginate(10);
        $courses = Courses::paginate(10);
     
        return view('admin.Quiz.index', compact('quiz','courses'));

    }

    public function create()
    {
        $control = 'create';
      

        return \View::make(
            'admin.quiz.create',
            compact('control')
        );
    }


    public function save(Request $request)
    {
        
        $quiz = new Quiz();
        $courses = new Courses();
        $choice = new Choices;
        $this->add_or_update($request, $quiz,$courses);

        return redirect('admin/quiz');
    }
    public function edit($id)
    {

        $control = 'edit';
        $courses = Courses::find($id);
        
        return \View::make('admin.quiz.create', compact(
            'control',
            'courses'
           
        ));
    }

    public function update(Request $request, $id)
    {
        $quiz = Quiz::find($id);
        $courses = Courses::find($id);
      
        $this->add_or_update($request, $quiz,$courses);
        return Redirect('admin/quiz');
    }


    public function add_or_update(Request $request,$quiz,$courses)
    {
         
         $quiz->question = $request->question;
         $quiz->course_id =  $courses->id;
         
         if($quiz){
            dd("ok");
            
            $choice->choice=$request->nextdivnum;
            return $choice;
            $quiz->save();
         }
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
