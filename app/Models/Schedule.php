<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table =  "schedule";
    

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'week_day_id', 'para_id', 'subject_id','group_id', 'room_id', 'teacher_id'
    ];

    public function weekDay() {
        return $this->belongsTo(WeekDay::class); 
    }
    public function para() {
        return $this->belongsTo(Para::class); 
    }
    public function subject() {
        return $this->belongsTo(Subject::class); 
    }
    public function group() {
        return $this->belongsTo(Group::class); 
    }
    public function room() {
        return $this->belongsTo(Room::class); 
    }
    public function teacher() {
        return $this->belongsTo(Teacher::class); 
    }
    
}
