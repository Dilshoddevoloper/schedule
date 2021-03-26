<?php

namespace App\Http\Controllers;

use App\Models\Group;
use DB;
use Illuminate\Http\Request;

class GroupController extends Controller
{
     //  Display a listing of the resource.
      
     //  @return \Illuminate\Http\Response
    public function index()
    {
      
      $groups=Group::with('student')->get();
      // dd($groups);
      
        return view('university.group.index')->with('groups',$groups);
    }

    
      // Show the form for creating a new resource.
      //
      // @return \Illuminate\Http\Response
    public function create()
    {
        return view('university.group.create');
    }

      // Store a newly created resource in storage.
      //
      // @param  \Illuminate\Http\Request  $request
      // @return \Illuminate\Http\Response
    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required'
    ]);

    Group::create([ 
        'name'=>$request->name
    ]);

    return redirect('/admin/groups');
    }

      // Display the specified resource.
      //
      // @param  \App\Models\Group  $group
      // @return \Illuminate\Http\Response
    public function show(Group $group)
    {
        //
    }

      // Show the form for editing the specified resource.
      //
      // @param  \App\Models\Group  $group
      // @return \Illuminate\Http\Response
    public function edit(Group $group)
    {
        //
    }

    
      // Update the specified resource in storage.
      //
      // @param  \Illuminate\Http\Request  $request
      // @param  \App\Models\Group  $group
      // @return \Illuminate\Http\Response
    public function update(Request $request, Group $group)
    {
        //
    }

     // //
      // Remove the specified resource from storage.
      //
      // @param  \App\Models\Group  $group
      // @return \Illuminate\Http\Response
      ///
    public function destroy(Group $group)
    {
        //
    }
}