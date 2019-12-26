<?php

namespace App\Http\Controllers\Backend\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Student;
use DB;
use Validator;

class StudentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }
    public function index()
   
    {
        $students = Student::orderBy('id','DESC')->get();
       
        return view('backend.student.student', compact(['students']));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.student.student_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = array(
            'fullname' => 'required|unique:students',
            'address' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        return redirect('/home/student/create')
        ->withErrors($validator)
        ->withInput();
        }
        $fullname = Input::get('fullname');
        $address = Input::get('address');
        $student = new Student;
        $student->fullname = $fullname;
        $student->address = $address;
        $student->save();

        return redirect()->route('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::where('id', $id)->get();
        return view('backend.student.student_show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::where('id', $id)->get();
        return view('backend.student.student_edit', compact('students','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'fullname' => 'required|unique:students',
            'address' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        return redirect('/home/student/create')
        ->withErrors($validator)
        ->withInput();
        }

        $fullname = Input::get('fullname');
        $address = Input::get('address');
        $student = Student::find($id);
        $student->fullname = $fullname;
        $student->address = $address;
        $student->update();
        return redirect()->route('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('student');
   

    }
}
