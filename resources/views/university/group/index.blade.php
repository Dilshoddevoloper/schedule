@extends('admin.index')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/createGroup" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Group</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col"> Name</th>
            <th scope="col"> Number_of_students</th>
        </tr>
        </thead>

        @if(count($groups))
            @foreach($groups as $group)
            <tbody>
                <th scope="row">{{$group->id}}</th>
                <td> <a href="#">{{$group->name}} </a></td>
            </tbody>
            @endforeach
        @endif
    </table>
@endsection