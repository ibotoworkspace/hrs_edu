<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Blog;
use App\Models\Courses;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Libraries\ExportToExcel;
use Maatwebsite\Excel\Concerns\ToArray;
// blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // $name = $request->name ?? '';
        $blog = Blog::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.blogs.index', compact('blog'));
    }

    public function create()
    {
        $control = 'create';

        // dd($course);
        return view('admin.blogs.create', compact('control'));
    }

    public function save(Request $request)
    {
// dd($request->all());
        $blog = new Blog();

        $this->add_or_update($request, $blog);

        return redirect('admin/addblog');

    }
    public function edit($id)
    {

        $control = 'edit';
        $blog = Blog::find($id);


        return view('admin.blogs.create', compact(
            'control',
            'blog',


        ));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        // $courses = Courses::find($id);

        $this->add_or_update($request, $blog);
        return Redirect('admin/addblog');
    }


    public function add_or_update(Request $request, $blog)
    {

        $blog->title = $request->title;
        $blog->description = $request->description;


        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $blog->avatar = $this->move_img_get_path($avatar, $root, 'image');
        }
        $blog->save();





        return redirect()->back();
    }

    public function destroy_undestroy($id)
    {

        $blog = Blog::find($id);
        if ($blog) {
            Blog::destroy($id);
            $new_value = 'Activate';
        } else {
            Blog::withTrashed()->find($id)->restore();
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
