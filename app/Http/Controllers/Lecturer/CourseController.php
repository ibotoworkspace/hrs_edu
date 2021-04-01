<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Mail\ClassLink;
use App\Mail\ReferenceLink;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CourseController extends Controller
{
    public function index()
    {

        $lecturer = Auth::user();
        $groups = Group::whereHas('lecturer', function ($q) use ($lecturer) {
            $q->where('user_id', $lecturer->id);
        })->with('course')->paginate(10);

        return view('lecturer.group.index', compact('groups'));
    }

    public function sendLink($id)
    {

        $groups = Group::with('groupUser.user')->find($id);
        foreach ($groups->groupUser as $gr) {
            $details = [
                'to' => $gr->user->email,
                'from' => 'contactus@hrsedu.com',
                'title' => 'HRS Academy',
                'subject' => 'Reference Link From HRS Academy ',
                "dated"  => date('d F, Y (l)'),
                "class_link" => $groups->class_link
            ];
            Mail::to($gr->user->email)->send(new ClassLink($details));
        }

        return redirect('lecturer/mygroup')->with('success', 'Send Link Successfully');
    }
}
