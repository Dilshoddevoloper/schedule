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
    public function edit($id)
    {
        $subject = Subject::where('id',$id)->first();
        return view('university.subject.edit')->with('subject', $subject);  
    }

    
      // Update the specified resource in storage.
      //
      // @param  \Illuminate\Http\Request  $request
      // @param  \App\Models\Subject  $subject
      // @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
        // dd($id);
        $this->validate($request,[
            'name' => 'required',
        ]);

         $data =$request->all();
        $subject=Subject::find($id);
        $subject -> update($data);        
        return redirect('admin/subjects');
    }

    
      // Remove the specified resource from storage.
      //
      // @param  \App\Models\Subject  $subject
      // @return \Illuminate\Http\Response
      //
      public function destroy($id)
      {
          $subject=Subject::find($id);
          $subject->delete();
  
          return redirect('admin/subjects');
      }
}