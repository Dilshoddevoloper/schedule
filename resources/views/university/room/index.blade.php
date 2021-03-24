@extends('admin.index')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/createRoom" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Room</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col"> Name</th>
        </tr>
        </thead>

        @if(count($rooms))
            @foreach($rooms as $room)
            <tbody>
                <th scope="row">{{$room->id}}</th>
                <td> <a href="#">{{$room->name}} </a></td>
            </tbody>
            @endforeach
        @endif
    </table>
@endsection