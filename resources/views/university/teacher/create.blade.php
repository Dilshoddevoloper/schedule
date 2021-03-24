@extends('admin.index')


@section('content')
<div class="col-md-8">
    <h1> Create Teacher </h1>

    <form  method="POST" action="/admin/createTeacher"> 
        {{ csrf_field() }}

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>


        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="subject_id" id="subject_id" class="form-control input-lg" >
                        <option value=""> Select science</option>
                        @foreach($subject_list as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        

        <div class="form-group">
            <button type="sumbit" class="btn btn-primary" >Add</button>
            
        </div>

        <div class="form-group">
            @include('layouts.error')
        </div>
    </form>

</div>

@endsection