<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[App\Http\Controllers\FilterController::class, 'index'] )->name('welcome.blade');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/adminhome', function () {
    return view('admin.index');
});

Route::get('/admin/subjects',[App\Http\Controllers\SubjectController::class, 'index'] );
Route::get('/admin/subjectCreate',[App\Http\Controllers\SubjectController::class, 'create'] );
Route::post('/admin/subjectCreate',[App\Http\Controllers\SubjectController::class, 'store'] );

Route::get('/admin/groups',[App\Http\Controllers\GroupController::class, 'index'] );
Route::get('/admin/createGroup',[App\Http\Controllers\GroupController::class, 'create'] );
Route::post('/admin/createGroup',[App\Http\Controllers\GroupController::class, 'store'] );

Route::get('/admin/room',[App\Http\Controllers\RoomController::class, 'index'] );
Route::get('/admin/createRoom',[App\Http\Controllers\RoomController::class, 'create'] );
Route::post('/admin/createRoom',[App\Http\Controllers\RoomController::class, 'store'] );


Route::get('/admin/teachers',[App\Http\Controllers\TeacherController::class, 'index'] );
Route::get('/admin/createTeacher',[App\Http\Controllers\TeacherController::class, 'create'] );
Route::post('/admin/createTeacher',[App\Http\Controllers\TeacherController::class, 'store'] );

Route::get('/admin/students',[App\Http\Controllers\StudentController::class, 'index'] );
Route::get('/admin/createStudent',[App\Http\Controllers\StudentController::class, 'create'] );
Route::post('/admin/createStudent',[App\Http\Controllers\StudentController::class, 'store'] );

Route::get('/schedule',[App\Http\Controllers\SchudeleController::class, 'index'] );
Route::get('/scheduleCreate',[App\Http\Controllers\SchudeleController::class, 'create'] );
Route::post('/scheduleCreate',[App\Http\Controllers\SchudeleController::class, 'store'] );

Route::post('dynamic_dependent/fetch', [App\Http\Controllers\SchudeleController::class, 'fetch'])->name('dynamicdependent.fetch');

Route::get('/student-schedule',[App\Http\Controllers\StudentScheduleController::class, 'index'] );
Route::get('/switch',[App\Http\Controllers\SwitchController::class, 'index'] );
Route::get('/teacher-schedule',[App\Http\Controllers\SchudeleController::class, 'teacherSchedule'] );










Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
