<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function generalchatList()
    {
        $admin_common = session()->get('admin_common');
        // dd( $admin_common);
        $chat = Discussion::with('user')->where('is_general', 1)->orderBy('created_at', 'DESC')->paginate(10);
            //   dd( $chat);
        foreach ($chat as $c) {
            $c->created_on = $this->created_at_msg_time($c->created_at);
        }
        return view('admin.generalchat.index', compact('chat', 'admin_common'));
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

        return redirect('admin/general/discussion/' . $request->group_id);
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
}
