<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teacher = Teacher::get(); // select * studnent
        // dd($student);
        return view('teacher', ['teacherList' => $teacher]);

    }

    public function show($id){

        $teacher = Teacher::with('class.students')
        ->findOrFail($id); // select * studnent
        // dd($student);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function create(){

        $teacher =Teacher::select('id','name')->get();
        return view('teacher-add', ['teacher' => $teacher]);
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
        $teacher = new Teacher;
        $teacher->create($request->all());
        // $student = Student::create($request->all());
        return redirect('/teacher');
    }
}

