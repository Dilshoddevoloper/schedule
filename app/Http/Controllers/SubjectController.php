<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
     
      // Display a listing of the resource.
      //
      // @return \Illuminate\Http\Response
      // 
    public function index()
    {
        $subjects=DB::table('subjects')
                    ->get();
        return view('university.subject.index')->with('subjects',$subjects);
    }

    public function create()
    {
        return view('university.subject.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        Subject::create([ 
            'name'=>$request->name,
        ]);

        return redirect('admin/subjects');
    }
    public function show(Subject $subject)
    {
        //
    }

     
      // Show the form for editing the specified resource.
      //
      // @param  \App\Models\Subject  $subject
      // @return \Illuminate\Http\Response
      // 
    public function edit(Subject $subject)
    {
          
    }

    
      // Update the specified resource in storage.
      //
      // @param  \Illuminate\Http\Request  $request
      // @param  \App\Models\Subject  $subject
      // @return \Illuminate\Http\Response
     
    public function update(Request $request, Subject $subject)
    {
        //
    }

    
      // Remove the specified resource from storage.
      //
      // @param  \App\Models\Subject  $subject
      // @return \Illuminate\Http\Response
      //
    public function destroy(Subject $subject)
    {
        
    }
}