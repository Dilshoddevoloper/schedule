@extends('admin.index')


@section('content')

<form method="POST"  action="{{ url('student/'.$student->id.'/update') }}" id="post-update">
@method('PUT')
@csrf
  <div class="container">
    <!-- <div class='row'> -->

      <div class="form-group col">
       <label for="first_name"> first Name</label> 
       <input type="text" name="first_name" class="form-control" id="first_name" value="{{$student->first_name}}" required>
      </div>

      <div class="form-group col">
       <label for="last_name"> Last Name</label> 
       <input type="text" name="last_name" class="form-control" id="last_name" value="{{$student->last_name}}" required>
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
     
    <!-- </div> -->
  
  <div class="">
    <div class="form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-primary  active float-right"> SAVE </button>
      </div>
    </div>
  </div>
</div>
</form>

  @include('layouts.error')

@endsection