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
            <th scope="col"> update</th>
            <th scope="col"> delete</th>

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
                <td><a href="{{ url('student/'.$student->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a></td>
                      <td>
                        <form method="POST" action="{{ route('student.destroy', $student->id) }}" id="post-destroy">
                          @method('DELETE')
                          {{ csrf_field() }}
                          <input type="submit" value="Delete" class="btn  btn-danger active float-right">
                        </form>
                      </td>
            </tbody>
            @endforeach
        @endif
    </table>
@endsection