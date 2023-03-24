<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

/**
 * Summary of StudentController
 */
class StudentController extends Controller
{
    //
    public function index(Request $request){
        // code
        // var_dump('testss');

        // $student = Student::all();
        // $student = Student::get();
        // $student = Student::with('class.HomeroomTeacher','extracurriculars')->get(); // select * studnent
        // dd($student);

        $keyword = $request->keyword;
        // $student = Student::paginate(25);
        $student = Student::where('name', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('gender', $keyword)
                    ->orWhere('nis', 'LIKE' , '%'.$keyword.'%')
                    ->orWhereHas('class', function($query) use($keyword){
                        $query->where('name', 'LIKE', '%'.$keyword.'%');
                    })
                    ->paginate(15);
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
    public
    function store(StudentCreateRequest $request) {

        // $validated = $request->validate([
        //     'nis'       => 'unique:students|max:8|required',
        //     'name'      => 'max:50|required',
        //     'gender'    => 'required',
        //     'class'     => 'required',
        // ]);

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

        $newName = '';

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name. '-' . now()->timestamp. '.' .$extension;
            $request->file('photo')->storeAs('photo', $newName);

        }

        $student = new Student;
        $request['image'] = $newName;
         // $student -> create($request -> all());
        $student = Student::create($request->all());
        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Added New Student Successfully!!');
        }

        return redirect('/students');
    }

    //memanggil dari databaes
    public function edit(Request $request, $id) {

        $student = Student::with('class') -> findOrFail($id);
        $class   = ClassRoom::where('id', '!=', $student -> class_id)
        -> get(['id', 'name']);
          // $class = ClassRoom::get(['id', 'name']);
          // dd($student);

          //flash messsage
          if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edited Student Successfully!!');
        }

        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    //submit editan ke database
        public function update(Request $request, $id) {

            $student = Student::findOrFail($id);
            $student -> update($request -> all());

            return redirect('/students');
        }

        public function delete($id){

            $student = Student::findOrFail($id);
            return view('student-delete', ['student' => $student]);
        }
        public function destroy($id){

            // dd($id);
            // QUERY BUILDER

            // $deletedStudent = DB::table('students')
            // ->where('id', $id)->delete();

            //ELQORUWENT

            $deletedStudent = Student::findOrFail($id);
            $deletedStudent->delete();


            // FLASH warning
            if ($deletedStudent) {
                Session::flash('status', 'success');
                Session::flash('message', 'Student Has been Deleted Successfully!!');
            }

            return redirect('/students');
        }

        public function deletedStudent( ){

            $deletedStudent = Student::onlyTrashed()->get();
            // dd($deletedStudent);
            return view('student-deleted-list', ['student' => $deletedStudent]);

        }

        public function restore($id){

            $deletedStudent = Student::withTrashed()->where('id', $id)->restore();

            if ($deletedStudent) {
                Session::flash('status', 'success');
                Session::flash('message', 'Student Has been Restored Successfully!!');
            }

            return redirect('/students');
        }
    }
