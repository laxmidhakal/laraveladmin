<?php

namespace App\Http\Controllers\Backend\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Teacher;
use DB;
use Validator;

class TeacherController extends Controller
{
   public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }
    public function index()
    {
     $teachers = Teacher::orderBy('id','DESC')->get();
       
        return view('backend.teacher.teacher', compact(['teachers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.teacher.teacher_create');
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
            'fullname' => 'required',
            'address' => 'required',
             'phone' => 'required|unique:teachers',
              'salary' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        return redirect('/home/teacher/create')
        ->withErrors($validator)
        ->withInput();
        }
        $fullname = Input::get('fullname');
        $address = Input::get('address');
        $phone=Input::get('phone');
        $salary=Input::get('salary');
        $teacher = new Teacher;
        $teacher->fullname = $fullname;
        $teacher->address = $address;
        $teacher->phone=$phone;
        $teacher->salary=$salary;
        $teacher->save();

        return redirect()->route('teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $teachers = Teacher::where('id', $id)->get();
        return view('backend.teacher.teacher_show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $teachers = Teacher::where('id', $id)->get();
        return view('backend.teacher.teacher_edit', compact('teachers','id'));
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
            'fullname' => 'required',
            'address' => 'required',
             'phone' => 'required|unique:teachers',
              'salary' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        return redirect('/home/teacher/create')
        ->withErrors($validator)
        ->withInput();
        }

        $fullname = Input::get('fullname');
        $address = Input::get('address');
        $phone = Input::get('phone');
        $salary = Input::get('salary');
        $teacher = Teacher::find($id);
        $teacher->fullname = $fullname;
        $teacher->address = $address;
        $teacher->phone=$phone;
        $teacher->salary=$salary;
        $teacher->update();
        return redirect()->route('teacher');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teacher=Teacher::find($id);
        $teacher->delete();
        return redirect()->route('teacher');
   
    }
}
