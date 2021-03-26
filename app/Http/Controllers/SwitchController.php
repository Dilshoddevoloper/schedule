<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Para;
use App\Models\Teacher;
use App\Models\WeekDay;
use Carbon\Carbon;


class SwitchController extends Controller
{
    public function index(Request $request) {
        $user = auth()->user();
        // dd($user);

        switch($user->role_id) 
        {
            case 1: return redirect('/adminhome'); break; 
            case 2: return redirect('/teacher-schedule'); break; 
            case 3: return redirect('/student-schedule'); break; 

        }
        
        return view('welcome')->with('schedules',$filter_schedules);
    }
}
