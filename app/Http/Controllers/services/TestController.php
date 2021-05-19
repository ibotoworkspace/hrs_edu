<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Choices;
use App\Models\Quiz;
use App\Models\Test_assigned;
use App\Models\Test_result;
use App\Models\UserQuiz;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testList(Request $request)
    {

        try {
            $user = $request->attributes->get('user');
            $all_test = Test_assigned::with('group_user', 'test.course', 'test.test_result')
                ->whereHas('group_user', function ($g) use ($user) {
                    $g->where('user_id', $user->id);
                })->get();
            $all_test->transform(function ($item) {

                $show_result = false;
                $test_user = new \stdClass();
                if ($item->test == null || $item->test->test_result == null) {
                    $show_result = false;
                } else {
                    $show_result = true;
                }

                $item->user = new \stdClass();
                $item->show_result = $show_result;


                return $item;
            });
            return $this->sendResponse(200, $all_test);
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }

    public function start_test(Request $request)
    {
        try {
            $questions = Quiz::with('choice')->where('test_id', $request->test_id)->get();
            $questions->transform(function($item){
                foreach($item->choice as $choice){
                    $choice->is_selected = false;
                }
                return $choice;
            });
            
            return $this->sendResponse(200, $questions); //, $discussion
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }

    public function testSave(Request $request)
    {
        $questions = $request->question;
        $user = $request->attributes->get('user');
        $user_quiz = [];

        foreach ($questions as $qkey => $q) {
            $selected_choices = [];
            if (isset($request->answer[$qkey]) && $request->answer[$qkey]) {
                $selected_choices = $request->answer[$qkey];
            }
            $is_correct = true;
            $correct_choices = Choices::where('quiz_id', $q)->where('is_correct', 1)->pluck('id')->toArray();
            if (sizeof($correct_choices) == sizeof($selected_choices)) {
                $is_correct = true;

                foreach ($correct_choices as $cc) {
                    if (!in_array($cc, $selected_choices)) {
                        $is_correct = false;
                        break;
                    }
                }
            } else {
                $is_correct = false;
            }
            $user_quiz[] = [
                'user_id' => $user->id,
                'quiz_id' => $q,
                'test_id' => $request->test_id,
                'selected_choice' => json_encode($selected_choices),
                'is_correct' => $is_correct
            ];
        }

        UserQuiz::insert($user_quiz);

        $total_question = count($questions);

        $user_quiz = UserQuiz::where('user_id', $user->id)->where('test_id', $request->test_id)->where('is_correct', 1)->pluck('id');
        $score = count($user_quiz);
        $user_quiz_result = new Test_result();
        $user_quiz_result->test_id =  $request->test_id;
        $user_quiz_result->user_id =  $user->id;
        $user_quiz_result->total_question =  $total_question;
        $user_quiz_result->score =  $score;
        $user_quiz_result->percentage =  ($score / $total_question) * 100;
        $user_quiz_result->save();



        return redirect('student/dashboard')->with('sussess', 'Your assignment is submitted .');
    }

    public function showScore(Request $request)
    {

        try {
            $test_result = Test_result::find($request->test_result_id); //

            return $this->sendResponse(200, $test_result); //, $discussion
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }
}
