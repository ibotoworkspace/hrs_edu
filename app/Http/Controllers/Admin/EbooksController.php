<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Ebooks;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

 class EbooksController extends Controller{

   public function index(Request $request)
    {
        $ebooks = Ebooks::with('course')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.ebooks.index', compact('ebooks'));
    }

    public function create()
    {
        $control = 'create';
        $courses = Courses::pluck('title','id');
        return view('admin.ebooks.create', compact('control','courses'));
    }


    public function save(Request $request)  
    {
        $ebooks = new Ebooks();
        $this->add_or_update($request, $ebooks);
        return redirect('admin/ebooks');
    }
    public function edit($id)
    {
        $control = 'edit';
        $courses = Courses::pluck('title','id');
        $ebooks = Ebooks::find($id);
        return  view('admin.ebooks.create', compact(
            'control',
            'ebooks',
            'courses'


        ));
    }

    public function update(Request $request, $id)
    {
        $ebooks = Ebooks::find($id);
        $this->add_or_update($request, $ebooks);
        return Redirect('admin/ebooks');
    }


    public function add_or_update($request, $ebooks)
  
    {
        // dd($request->all());
        $ebooks->name = $request->name;
        $ebooks->book_url = $request->book_url;
        $ebooks->course_id = $request->course_id;
       
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $ebooks->avatar = $this->move_img_get_path($avatar, $root, 'image');
        } else if (strcmp($request->avatar, "")  !== 0) {
            $ebooks->avatar = $request->avatar;
        }
        if ($request->hasFile('book_url')) {
            $book_url = $request->book_url;
            $root = $request->root();
            $ebooks->book_url = $this->move_img_get_path($book_url, $root, 'image');
        } else if (strcmp($request->avatar, "")  !== 0) {
            $ebooks->book_url = $request->book_url;
        }
      
      
       
        $ebooks->save();

        return redirect()->back();
    }

    public function destroy_undestroy($id)
    {

        $ebooks = Ebooks::find($id);
        if ($ebooks) {
            Ebooks::destroy($id);
            $new_value = 'Activate';
        } else {
            Ebooks::withTrashed()->find($id)->restore();
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
