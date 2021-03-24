@extends('admin.index')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/createTeacher" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Teacher</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col"> First Name</th>
            <th scope="col"> Last Name</th>
            <th scope="col"> Science</th>
        </tr>
        </thead>

        @if(count($teachers))
            @foreach($teachers as $teacher)
            <tbody>
                <th scope="row">{{$teacher->id}}</th>
                <td scope="row"> {{$teacher->first_name}}</td>
                <td scope="row"> {{$teacher->last_name}}</td>
                <td scope="row">{{ $teacher->subject['name'] }} </td>
            </tbody>
            @endforeach
        @endifreach
        @endif
    </table>
@endsection