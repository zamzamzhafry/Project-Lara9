<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    //
    public function index(){

        // $ekskul = Extracurricular::with('students')->get();
        $ekskul = Extracurricular::get();
        // dd($ekskul);
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }
    public function show($id){

        $ekskul = Extracurricular::with('students')->findOrFail($id);
        // $siswa=$student->name;
        return view('extracurricular-detail', ['ekskulList' => $ekskul]);
    }

    public function create(){

        $extracurricular=Extracurricular::select('id','name')->get();
        return view('extracurricular-add', ['extracurriculars' => $extracurricular]);
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
        $extracurricular = new Extracurricular;
        $extracurricular->create($request->all());
        // $student = Student::create($request->all());
        return redirect('/extracurricular');
    }
}
