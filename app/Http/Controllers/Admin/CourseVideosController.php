<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course_Video;
use App\Models\Courses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

class CourseVideosController extends Controller
{
    public function index($id)
    {

        $coursevideos = Course_Video::where('course_id', $id)->paginate(10);
        $course = Courses::find($id);

        return view('admin.coursesvideos.index', compact('coursevideos', 'course'));
    }


    public function create(Request $request, $id)
    {

        $control = 'create';
        $courses =  Courses::find($id);



        return \View::make(
            'admin.coursesvideos.create',
            compact('control', 'courses')
        );
    }


    public function save(Request $request)
    {
        $coursesvideos = new Course_Video();
        $coursesvideos->course_id = $request->course_id;


        $this->add_or_update($request, $coursesvideos);
        // return $this->index($request->course_id);
        return redirect('admin/courses/videos/' . $request->course_id);
    }
    public function edit($id)
    {

        //  dd($request);
        $control = 'edit';
        $coursesvideos = Course_Video::find($id);
        $courses = Courses::find($coursesvideos->course_id);
        //  dd($courses);

        return \View::make('admin.coursesvideos.create', compact(
            'control',
            'coursesvideos',
            'courses'

        ));
    }

    public function update(Request $request, $id)
    {
        $coursesvideos = Course_Video::find($id);

        //  dd($request->course_id);
        $this->add_or_update($request, $coursesvideos);

        return redirect('admin/courses/videos/' . $request->course_id);
    }


    public function add_or_update($request, $coursesvideos)
    {
        $coursesvideos->url = $request->avatar;
        $coursesvideos->title = $request->title;

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $coursesvideos->url = $this->move_img_get_path($avatar, $root, 'video');
        } else if (strcmp($request->video_visible, "")  !== 0) {
            $embeded_url = $this->get_embeddedyoutube_url($request->video_visible);
            $coursesvideos->url = $embeded_url;
        }

        $coursesvideos->save();
    }
    public function destroy_undestroy($id)
    {

        $coursesvideos = Course_Video::find($id);
        if ($coursesvideos) {
            Course_Video::destroy($id);
            $new_value = 'Activate';
        } else {
            Course_Video::withTrashed()->find($id)->restore();
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
