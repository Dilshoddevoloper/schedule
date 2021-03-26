<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use App\Models\User;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::with('subject')->get(); 
        return view('university.teacher.index')->with(['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject_list=DB::table('subjects')
                    ->get();
        return view('university.teacher.create')->with('subject_list',$subject_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'subject_id' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $teacher = Teacher::create([ 
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'subject_id'=>$request->subject_id
        ]);

        User::create([ 
            'role_id' =>2,
            'teacher_id'=> $teacher->id,
            'login'=>$request->login,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect('admin/teachers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
