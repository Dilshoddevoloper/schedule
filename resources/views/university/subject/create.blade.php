@extends('admin.index')


@section('content')
<div class="col-sm-8 blog-main">
    <h1>Add Subject</h1>
    <form method="POST" action="/admin/subjectCreate">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

        <div class="form-group">
            @include('layouts.error')
        </div>
    </form>
</div>
@endsection