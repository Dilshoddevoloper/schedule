<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=DB::table('students')
            ->get();
        return view('university.student.index')->with('students',$students);
    }

    public function create()
    {
        $group_list=DB::table('groups')
            ->get();
        return view('university.student.create')->with('group_list',$group_list);
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'group_id' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $student = Student::create([ 
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'group_id'=>$request->group_id
        ]);

        User::create([ 
            'role_id' =>3,
            'student_id'=> $student->id,
            'login'=>$request->login,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);



        return redirect('admin/students');
    }

    
    public function show(Student $student)
    {
        //
    }

   
    public function edit(Student $student)
    {
        //
    }

    
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}