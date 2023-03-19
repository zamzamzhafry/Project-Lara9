<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    //
    public function index(){
        // code
        // var_dump('testss');

        //  $class = ClassRoom::all(); // select * studnent
        // dd($student);
        // $class = ClassRoom::with('students', 'HomeroomTeacher')->get();
        $class = ClassRoom::get();

        return view('classroom', ['classList' => $class]);
    }

    public function show($id){

        $class = ClassRoom::with(['students','homeroomTeacher'])->
        findOrFail($id);

        return view('class-detail', ['classList' => $class]);
    }

    //untuk memanggil looping list guru wali
    public function create(){

        $teacher=Teacher::select('id','name')->get();
        return view('class-add', ['teacher' => $teacher]);
    }

    public function store(Request $request){

        // $class->create($request->all());
      $class = ClassRoom::create($request->all());
        return redirect('/class');
    }
}
