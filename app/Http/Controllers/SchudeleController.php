<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Schedule;
use App\Models\WeekDay;
use App\Models\Para;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Room;
use App\Models\Teacher;


class SchudeleController extends Controller
{
    public function index() {
        $schedules=Schedule::with('weekDay', 'para', 'subject', 'group', 'room', 'teacher')->get();
            // dd($schedules);
        return view('university.schedule.index')->with('schedules',$schedules);
    }

    public function create() {
        $weekDay_list=WeekDay::all();
        $para_list = Para::all();
        $subject_list = Subject::all();
        $group_list = Group::all();
        $room_list = Room::all();
        $teacher_list = Teacher::all();
        return view('university.schedule.create',['weekDay_list' => $weekDay_list,
         'para_list' => $para_list, 'subject_list' => $subject_list ,
          'group_list' => $group_list, 'room_list' => $room_list, 'teacher_list' => $teacher_list ]);
    }

    public function store(Request $request) {
        $this->validate($request,[
            'weekDay_id' => 'required',
            'para_id' => 'required',
            'subject_id' => 'required',
            'group_id' => 'required',
            'room_id' => 'required',
            'teacher_id' => 'required',

        ]);
            // dd($request->teacher_id);
        Schedule::create([ 
            'week_day_id'=>$request->weekDay_id,
            'para_id'=>$request->para_id,
            'subject_id'=>$request->subject_id,
            'group_id'=>$request->group_id,
            'room_id'=>$request->room_id,
            'teacher_id'=>$request->teacher_id
        ]);

        return redirect('/schedule');
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

    public function teacherSchedule() {
            $user = auth()->user();
            $schedules=Schedule::where('teacher_id',$user->teacher_id)
            ->with('weekDay', 'para', 'subject', 'group', 'room', 'teacher')->get();
           
            // dd($user->teacher_id);
                // dd($schedules);
            return view('university.studentSchedule.index')->with('schedules',$schedules);

    }
    
}
