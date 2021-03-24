@extends('admin.index')


@section('content')
    <div class="mb-3" style="margin: 5px;">
        <a href="/admin/subjectCreate" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Subject</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col">Name</th>
        </tr>
        </thead>

        @if(count($subjects))
            @foreach($subjects as $subject)
            <tbody>
                <th scope="row">{{$subject ->id}}</th>
                <td>{{$subject->name}}</td>
            </tbody>
            @endforeach
        @endif
    </table>
@endsection