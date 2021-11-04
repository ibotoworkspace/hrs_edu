<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Choices;
use App\Models\Course_Registered;
use App\Models\Courses;
use App\Models\Discussion;
use App\Models\GroupUser;
use App\Models\Quiz;
use App\Models\Test_assigned;
use App\Models\Test_result;
use App\Models\UserQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function registerCourse(Request $request)
    {

        $method = $request->method();

        if ($method == 'POST') {
            // dd($request->all());
            $course = Courses::find($request->course_id);
            $user_id = Auth::id();
            $register_course = new Course_Registered();
            $register_course->course_id = $request->course_id;
            $register_course->name = $course->title;
            $register_course->user_id = $user_id;
            $register_course->save();
            // return redirect('student/courseregistration');
            return Redirect('student/dashboard');
        } else {
            $courses = Courses::get();
            // $currenturl = url()->current();
            // // dd($currentURL);
            return view('studentdashboard.courseregistration.index', compact('courses'));
        }
    }

    public function index(Request $request, $message = null)
    {
        $user_id = Auth::id();
        $register_courses = Course_Registered::with('course.group', 'course.test.test_assign', 'course.test.test_result')->where('user_id', $user_id)->where('is_paid', 1)->paginate(10);
        // dd($register_courses);
         //
        // $user_course = Course_Registered::where('course_id', $request->course_id)->where('user_id', $user->id)->first();


        //

        return view('studentdashboard.course.index', compact('register_courses'));
    }
    public function search_course_registered(Request $request)
    {
        // dd($request->all());
       $search_text = $request->search_text;

        $courses = Courses::where('title','like','%'.$search_text.'%')->paginate(10);

        return view('studentdashboard.courseregistration.index', compact('courses','search_text'));
    }

    public function courseDetail(Request $request)

    {

        $course_id = decrypt($request->course_id);
        $course_detail = Courses::with('chapters', 'videos', 'registerCourse')->find($course_id);


        return view('studentdashboard.course.detail', compact('course_detail'));
    }
    public function coursevideos(Request $request)

    {

        $course_id = decrypt($request->course_id);
        $course_detail = Courses::with('chapters', 'videos', 'registerCourse')->find($course_id);
        // dd( $course_detail);


        return view('studentdashboard.course.course_detail', compact('course_detail'));
    }



    public function testList(Request $request)
    {

        $questions = Quiz::with('choice')->where('test_id', $request->test_id)->get();

        return view('studentdashboard.course.test', compact('questions'));
    }
    public function ShowTestList(Request $request)
    {
        $all_test = Test_assigned::with('group_user', 'test.course', 'test.test_result')
            ->whereHas('group_user', function ($g) {
                $g->where('user_id',  Auth::id());
            })->get();

        return view('studentdashboard.test.index', compact('all_test'));
    }
    public function testResult(Request $request)
    {

        $test_result = Test_result::find($request->test_result_id);
        return view('studentdashboard.course.test_result', compact('test_result'));
    }

    public function testSave(Request $request)
    {
        $questions = $request->question;
        $user_id = Auth::id();
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
                'user_id' => $user_id,
                'quiz_id' => $q,
                'test_id' => $request->test_id,
                'selected_choice' => json_encode($selected_choices),
                'is_correct' => $is_correct
            ];
        }

        UserQuiz::insert($user_quiz);

        $total_question = count($questions);

        $user_quiz = UserQuiz::where('user_id', $user_id)->where('test_id', $request->test_id)->where('is_correct', 1)->pluck('id');
        $score = count($user_quiz);
        $user_quiz_result = new Test_result();
        $user_quiz_result->test_id =  $request->test_id;
        $user_quiz_result->user_id =  $user_id;
        $user_quiz_result->total_question =  $total_question;
        $user_quiz_result->score =  $score;
        $user_quiz_result->percentage =  ($score / $total_question) * 100;
        $user_quiz_result->save();

        return redirect('student/dashboard')->with('sussess', 'Your assignment is submitted .');
    }
    public function readChapter(Request $request)
    {
        // dd($request->all());

        $chapter = Chapter::find($request->chap_id);

        return view('studentdashboard.course.readchapter', compact('chapter'));
    }

    public function courseBadge(Request $request)
    {

        $course_reg = Course_Registered::find($request->course_id);
        $course_reg->is_completed = 1;
        $course_reg->save();

        $response = array(
            'status' => 'success',
            'msg' => $course_reg,
        );

        return $response;
    }
    //  general discussion
    public function generalchatList()
    {
        $student_common = session()->get('student_common');
        // dd(  $student_common);
        $chat = Discussion::with('user')->where('is_general', 1)->orderBy('created_at', 'DESC')->paginate(10);
        foreach ($chat as $c) {
            $c->created_on = $this->created_at_msg_time($c->created_at);
        }
        return view('studentdashboard.generalchat.index', compact('chat', 'student_common'));
    }

    public function generalsend(Request $request)
    {

        $current_user = Auth::id();

        $user_msg = new Discussion();
        $user_msg->user_id = $current_user;
        $user_msg->is_general = 1;
        $user_msg->chat = $request->message;
        $res = new \stdClass();
        $res->status = true;
        $res->response = $user_msg;
        $res->error = null;

        $user_msg->save();

        $response = json_encode($res);
        return $response;
    }

    public function generallatestChat(Request $request)
    {

        $chat = Discussion::where('is_general', 1)
            // ->where('sender','user')
            ->where('id', '>', $request->msg_id)
            ->orderBy('created_at', 'DESC')->get();
        $res = new \stdClass();
        $res->status = true;
        $res->response = $chat;
        $res->error = null;

        return json_encode($res);
    }


    public function generaladdComment(Request $request)
    {

        $user_id = Auth::id();
        $discussion = new Discussion();
        $discussion->chat = $request->comment;
        $discussion->user_id = $user_id;
        $discussion->is_general = 1;
        $discussion->save();

        return redirect('student/discussion/' . $request->group_id);
    }

    // is class methoods start

    public function chatList($id)
    {
        $group_id = $id;
        $student_common = session()->get('student_common');
        $chat = Discussion::with('user')->where('group_id', $group_id)->orderBy('created_at', 'DESC')->paginate(10);
        foreach ($chat as $c) {
            $c->created_on = $this->created_at_msg_time($c->created_at);
        }
        return view('studentdashboard.course.chatdetail', compact('chat', 'student_common', 'group_id'));
    }

    public function send(Request $request, $group_id)
    {

        $current_user = Auth::id();

        $user_msg = new Discussion();
        $user_msg->user_id = $current_user;
        $user_msg->group_id = $group_id;
        $user_msg->chat = $request->message;
        $res = new \stdClass();
        $res->status = true;
        $res->response = $user_msg;
        $res->error = null;

        $user_msg->save();

        $response = json_encode($res);
        return $response;
    }

    public function latestChat(Request $request)
    {
        // dd($request->all());

        $chat = Discussion::where('group_id', $request->group_id)
            // ->where('sender','user')
            ->where('id', '>', $request->msg_id)
            ->orderBy('created_at', 'DESC')->get();
        $res = new \stdClass();
        $res->status = true;
        $res->response = $chat;
        $res->error = null;

        return json_encode($res);
    }

    public function created_at_msg_time($created_at)
    {

        $created_at = new \DateTime($created_at);
        $now = new \DateTime(date('Y-m-d H:i:s'));
        $created_at = $created_at->diff($now);

        $year = $created_at->y;
        $month = $created_at->m;
        $day = $created_at->d;
        $hr = $created_at->h;
        $min = $created_at->i;

        if ($year) {
            if ($year == 1) {
                return $year . ' year ago';
            }
            return $year . ' years ago';
        }

        if ($month) {
            if ($month == 1) {
                return $month . ' month ago';
            }
            return $month . ' months ago';
        }

        if ($day) {
            if ($day == 1) {
                return $day . ' day ago';
            }
            return $day . ' days ago';
        }

        if ($hr) {
            if ($hr == 1) {
                return $hr . ' hour ago';
            }
            return $hr . ' hours ago';
        }

        if ($min) {
            if ($min == 1) {
                return $min . ' minute ago';
            }
            return $min . ' minutes ago';
        } else {
            return '0 minutes ago';
        }
    }
    public function addComment(Request $request)
    {

        $user_id = Auth::id();
        $discussion = new Discussion();
        $discussion->chat = $request->comment;
        $discussion->user_id = $user_id;
        $discussion->group_id = $request->group_id;
        $discussion->is_general = 1;
        $discussion->save();

        return redirect('student/discussion/' . $request->group_id);
    }

    // is class methoods end
}
