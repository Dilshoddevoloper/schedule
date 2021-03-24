@extends('admin.index')


@section('content')
<div class="col-sm-8 blog-main">
    <h1>Add Student</h1>
    <form method="POST" action="/admin/createStudent">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="group_id" id="group_id" class="form-control input-lg" >
                        <option value=""> Select Group</option>
                        @foreach($group_list as $group)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>

        <div class="form-group">
            @include('layouts.error')
        </div>
    </form>
</div>
@endsection