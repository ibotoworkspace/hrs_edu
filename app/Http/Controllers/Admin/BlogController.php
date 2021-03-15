<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.add');
    }
    public function save(Request $request)
    {

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;


        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $blog->avatar = $this->move_img_get_path($avatar, $root, 'image');
        }
        $blog->save();

        return view('admin.blog.add')->with('success', 'Your course request is submited');
    }
}
