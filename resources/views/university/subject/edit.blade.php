@extends('admin.index')


@section('content')

<form method="POST"  action="{{ url('subject/'.$subject->id.'/update') }}" id="post-update">
@method('PUT')
@csrf
  <div class="container">
    <div class='row'>

    
      <div class="form-group col">
       <label for="name"> Name</label> 
       <input type="text" name="name" class="form-control" id="name" value="{{$subject->name}}" required>
      </div>
     
    </div>
  
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