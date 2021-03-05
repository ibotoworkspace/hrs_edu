<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\PromoCode;

class PromoCodeController extends Controller
{
    public function index()
    {

        $promocode = PromoCode::paginate(10);
        return view('admin.promocode.index', compact('promocode'));
    }

    public function create()
    {
        $control = 'create';
        return \View::make(
            'admin.promocode.create',
            compact('control')
        );
    }


    public function save(Request $request)
    {

        //    dd($request->all());
        $promocode = new PromoCode();
        // $course = new Courses();


        $this->add_or_update($request, $promocode);

        return Redirect('admin/promocode');
    }
    public function edit($id)
    {

        $control = 'edit';
        $promocode = PromoCode::find($id);

        return \View::make('admin.promocode.create', compact(
            'control',
            'promocode'

        ));
    }

    public function update(Request $request, $id)
    {
        $promocode = PromoCode::find($id);
        // $courses = Courses::find($id);

        $this->add_or_update($request, $promocode);
        return Redirect('admin/promocode');
    }


    public function add_or_update(Request $request, $promocode)
    {

        $promocode->title = $request->title;
        $promocode->percentage =   $request->percentage;
        $promocode->code =   $request->code;
        $promocode->validity =   strtotime($request->validity);
        $promocode->used_times =   $request->usedtimes;
        $promocode->is_active =   $request->is_active;
        $promocode->save();

        return redirect()->back();
    }



    public function destroy_undestroy($id)
    {

        $promocode = PromoCode::find($id);
        if ($promocode) {
            PromoCode::destroy($id);
            $new_value = 'Activate';
        } else {
            PromoCode::withTrashed()->find($id)->restore();
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
