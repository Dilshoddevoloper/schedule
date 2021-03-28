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
            <th scope="col"> update</th>
            <th scope="col"> delete</th>
        </tr>
        </thead>

        @if(count($subjects))
            @foreach($subjects as $subject)
            <tbody>
                <th scope="row">{{$subject ->id}}</th>
                <td>{{$subject->name}}</td>
                <td><a href="{{ url('subject/'.$subject->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a></td>
                      <td>
                        <form method="POST" action="{{ route('subject.destroy', $subject->id) }}" id="post-destroy">
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