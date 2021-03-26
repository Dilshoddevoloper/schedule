@extends('layouts.app')


@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="col-md-8">
    <h1> Create Schedule </h1>

    <form  method="POST" action="/scheduleCreate"> 
        {{ csrf_field() }}

        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="weekDay_id" id="weekDay_id" class="form-control input-lg" >
                        <option value=""> Select Day</option>
                        @foreach($weekDay_list as $weekDay)
                            <option value="{{$weekDay->id}}">{{$weekDay->week_day}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="para_id" id="para_id" class="form-control input-lg" >
                        <option value=""> Select para</option>
                        @foreach($para_list as $para)
                            <option value="{{$para->id}}">{{$para->id}} - para ({{$para->time_from}} -{{$para->to_time}}) </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="group_id" id="group_id" class="form-control input-lg" >
                        <option value=""> Select Group</option>
                        @foreach($group_list as $group)
                            <option value="{{$group->id}}">{{$group->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="room_id" id="room_id" class="form-control input-lg" >
                        <option value=""> Select Room</option>
                        @foreach($room_list as $room)
                            <option value="{{$room->id}}">{{$room->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        
        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="subject_id" id="subject_id" class="form-control input-lg" data-dependent="teacher_id" >
                        <option value=""> Select subject</option>
                        @foreach($subject_list as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        
        
        <div class='row'>  
            <div class="container box">
                <div class="form-group">
                    <select name="teacher_id" id="teacher_id" class="form-control input-lg dynamic" >
                    <option value=""> Select Teacher</option>
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

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script>
$(document).ready(function(){ 
  $('#subject_id').change(function(){ 
    if($(this).val() != '')
    {
      var select = $(this).attr("id");
      var value =$(this).val();
      var dependent = 'subject_id';
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:"{{route('dynamicdependent.fetch')}}",
        method:"POST",
        data:{select:select, value:value, _token:_token, dependent},
        success:function(result)
        {
          $('#teacher_id').html(result);
        }
      })
    }
  });
});
</script>





@endsection