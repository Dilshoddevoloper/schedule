@extends('admin.index')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/createStudent" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Student</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Group</th>

        </tr>
        </thead>

        @if(count($students))
            @foreach($students as $student)
            <?php
                $studentGroup = \App\Models\Group::where('id',$student->group_id)->first();
            ?>
            <tbody>
                <th scope="row">{{$student ->id}}</th>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$studentGroup->name}}</td>
            </tbody>
            @endforeach
        @endif
    </table>
@endsection