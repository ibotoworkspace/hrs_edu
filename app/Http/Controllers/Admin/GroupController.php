<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Libraries\ExportToExcel;
use App\Models\Courses;
use App\Models\Discussion;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\Lecturer;
use App\Models\SkillAdvisor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class GroupController extends Controller
{
    public function index()
    {

        $groups = Group::with('groupUser.user', 'course', 'lecturer.user')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.group.index', compact('groups'));
    }
    public function create()
    {
        $control = 'create';
        $users = User::where('role_id', 2)->get();
        $lecturers = Lecturer::with('user')->get();
        $courses = Courses::get();

        return view('admin.group.create', compact('control', 'users', 'lecturers', 'courses'));
    }

    public function save(Request $request)
    {

        $group = new Group();

        $this->add_or_update($request, $group);

        return redirect('admin/group');
    }

    public function edit($id)
    {
        $control = 'edit';
        $group = Group::with('groupUser.user', 'course', 'lecturer')->find($id);
        $users = User::where('role_id', 2)->get();
        $lecturers = Lecturer::with('user')->get();
        $courses = Courses::get();
        return \View::make('admin.group.create', compact(
            'control',
            'courses',
            'group',
            'lecturers',
            'users',

        ));
    }


    public function update(Request $request, $id)
    {

        $group = Group::find($id);

        $this->add_or_update($request, $group);
        return Redirect('admin/group');
    }

    public function add_or_update($request, $group)
    {

        $group->name = $request->title;
        $group->lecturer_id = $request->lecturer_id;
        $group->course_id = $request->course_id;
        $group->class_link = $request->link;
        $group->start_date = strtotime($request->start_date);
        $group->end_date = strtotime($request->end_date);
        $group->is_active = $request->is_active;
        $group->save();

        foreach ($request->user_check as $user) {
            $data[] =
                ['user_id' => $user, 'group_id' => $group->id];
        }
        GroupUser::insert($data);
    }
    public function chatList($id)
    {
        $group_id = $id;
        $admin_common = session()->get('admin_common');
        $chat = Discussion::with('user')->where('group_id', $group_id)->orderBy('created_at', 'DESC')->paginate(10);
        foreach ($chat as $c) {
            $c->created_on = $this->created_at_msg_time($c->created_at);
        }
        // $discusssion_list =  Discussion::with('user')->where('group_id', $group_id)->get();

        return view('admin.group.details', compact('chat', 'admin_common', 'group_id'));
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
        $discussion->save();

        return redirect('admin/discussion/' . $request->group_id);
    }

    public function statusUpdate($id)
    {

        $group = Group::find($id);
        // dd($group);
        if ($group->is_active == 0) {
            $group->is_active = 1;
            $group->save();
            $new_value = 'Active';
        } else {
            $group->is_active = 0;
            $group->save();
            $new_value = 'In Active';
        }

        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function index_excel(Request $request)
    {
        $groups = Group::with('groupUser.user', 'course', 'skilladvisor')->orderBy('id', 'DESC')->get();
        $view =  view('admin.group.pdf', compact('groups'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'group.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $groups = Group::with('groupUser.user', 'course', 'skilladvisor')->orderBy('id', 'DESC')->get();
        $view =  view('admin.group.pdf', compact('groups'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'group.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $groups = Group::with('groupUser.user', 'course', 'skilladvisor')->orderBy('id', 'DESC')->get();
        $pdf = PDF::loadView('admin.group.pdf', compact('groups', 'type'));

        return $pdf->download('HRS-group-list.pdf');
    }


    public function PDF()
    {

        $groups = Group::with('groupUser.user', 'course', 'skilladvisor')->orderBy('id', 'DESC')->get();
        return view('admin.group.pdf', compact('groups'));
    }
}
