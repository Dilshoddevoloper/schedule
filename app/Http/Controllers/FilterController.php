<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Para;
use App\Models\Teacher;
use App\Models\WeekDay;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Room;
use Carbon\Carbon;


class FilterController extends Controller
{
    public function index(Request $request) {
        $week_of_day =WeekDay::where('week_day', date("D"))->first(); 
        // dd(date("D"));
        $date= Carbon::now('GMT+5')->format('H:i:s');
        $para_id = Para::whereTime('time_from', '<=', $date)
        ->whereTime('to_time', '>=', $date)->first();
        $filter_schedules=Schedule::where('week_day_id', $week_of_day->id)
        ->where('para_id', $para_id->id)
        ->with('weekDay', 'para', 'subject', 'group', 'room', 'teacher')->get();
        $weekDay_list=WeekDay::all();

        $subject_list = Subject::all();
        $group_list = Group::all();
        $room_list = Room::all();
        $teacher_list = Teacher::all();

        $query  = Schedule::query();
        if(isset($request->teacherName) && !empty($request->teacherName))
        {
            $query = $query->where('first_name', 'like', '%' . $request->teacherName . '%' );  
        } 

        if(isset($request->weekDay_id) && !empty($request->weekDay_id))
        {
            $query = $query->where('week_day_id', $request->weekDay_id);
            // $filter_schedules = $query->all();
        } 

        if(isset($request->time) && !empty($request->time))
        {
            $para_id = Para::whereTime('time_from', '<=', $request->time)
            ->whereTime('to_time', '>=', $request->time)->first()->id;
            $query = $query->where('para_id', $para_id);
            // dd($query);
            // $filter_schedules = $query->all();

        }
        
        if(isset($request->subject_id) && !empty($request->subject_id))
        {
            
            $query = $query->where('subject_id', $request->subject_id);
            // $filter_schedules = $query->all();
            // dd($request->subject_id);
        } 

        if(isset($request->group_id) && !empty($request->group_id))
        {
            $query = $query->where('group_id', $request->group_id);
        } 

        if(isset($request->room_id) && !empty($request->room_id))
        {
            $query = $query->where('room_id', $request->room_id);
        } 

        if(isset($request->teacher_id) && !empty($request->teacher_id))
        {
            $query = $query->where('teacher_id', $request->teacher_id);
        } 
        
        
        
        
        
        
        $filter_schedules = $query->get();
    
        return view('welcome',['schedules' => $filter_schedules, 'weekDay_list' => $weekDay_list, 
        'subject_list' => $subject_list, 'group_list' => $group_list, 'room_list' => $room_list, 'teacher_list' => $teacher_list ]);
    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data =DB::table('teachers')
                ->where('subject_id', $value)
                ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .=( '<option value="'.$row->id.'">'. $row->first_name .'</option>');
        }
        echo $output;
    }
}
