<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        // code
        // var_dump('testss');

        // $student = Student::all();
        $student = Student::get();
        // $student = Student::with('class.HomeroomTeacher','extracurriculars')->get(); // select * studnent
        // dd($student);
        return view('student', ['studentList' => $student]);
    }
    public function show($id){

        $student = Student::with(['class.HomeroomTeacher', 'extracurriculars'])
        ->findOrFail($id);
        // $siswa=$student->name;
        return view('student-detail', ['student' => $student]);
    }

    public function create(){

        $class=ClassRoom::select('id','name')->get();
        return view('student-add', ['class' => $class]);
    }
    public function store(Request $request){

        // dd($request->all());

        // CARA 1
        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        // !!cara 2

        // mass assignemnet cek studeen model
        // $student->create([        ]);
        $student = new Student;
        $student->create($request->all());
        // $student = Student::create($request->all());
        if ($student) {
            Session::flash('status', 'success');

            # code...
        }

        return redirect('/students');
    }

    public function edit(Request $request, $id){

        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)
        ->get(['id', 'name']);
        // $class = ClassRoom::get(['id', 'name']);
        // dd($student);
        return view('student-edit',['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id){

        $student = Student::findOrFail($id);

        $student->update($request->all());
    }
}
