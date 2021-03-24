@extends('layouts.app')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/createGroup" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Group</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> T/r</th>
            <th scope="col"> Group Name</th>
            <th scope="col"> Subject Name</th>
            <th scope="col"> Teachers</th>
            <th scope="col"> From Time</th>
            <th scope="col"> To Time</th>
            <th scope="col"> Room</th>

        </tr>
        </thead>

            @foreach($groups as $group)
            <tbody>
                <th scope="row">{{$group->id}}</th>
                <td> <a href="#">{{$group->name}} </a></td>
                <th scope="row">{{$group->id}}</th>
                <th scope="row">{{$group->id}}</th>
                <th scope="row">{{$group->id}}</th>
                <th scope="row">{{$group->id}}</th>
                <th scope="row">{{$group->id}}</th>
            </tbody>
            @endforeach
    </table>
@endsection