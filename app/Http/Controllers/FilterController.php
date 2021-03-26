<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Para;
use App\Models\Teacher;
use App\Models\WeekDay;
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
        
        $query  = Teacher::query();
        if(isset($request->teacherName) && !empty($request->teacherName))
        {
            $query = $query->where('first_name', 'like', '%' . $request->teacherName . '%' )->get();  
            $filter_schedules = Schedule::where('teacher_id' , $query->pluck('id'))->get();
        } 
        // dd($query->pluck('id'));

        // $edu_centers = $query->paginate(5);
        
        return view('welcome')->with('schedules',$filter_schedules);
    }
}
