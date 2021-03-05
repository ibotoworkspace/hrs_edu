<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Choices;
use App\Models\Quiz;

class ChoiceController extends Controller
{
    
public function index($id){

    $question_id = $id;
$choice = Choices::where('quiz_id',$id)->get();
return view('admin.choices.index', compact('choice','question_id'));

// dd('choice');

}



public function create($question_id){

    $control = 'create';
    return \View::make(
        'admin.choices.create',
        compact('control','question_id')
    );




}


public function save(Request $request){
dd($request->all());
    $choices = new choices();
    $this->add_or_update($request, $choices);

    return redirect()->back();
}




public function add_or_update($request , $choices){

//    dd('hy');
    $choices->title = $request->title;
    $choices->save();

    return redirect()->back();
}


}






