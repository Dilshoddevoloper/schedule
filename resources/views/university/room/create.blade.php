@extends('admin.index')


@section('content')
<div class="col-sm-8 blog-main">
    <h1>Add Room</h1>
    <form method="POST" action="/admin/createRoom">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Add</button>

        <div class="form-group">
            @include('layouts.error')
        </div>
    </form>
</div>
@endsection