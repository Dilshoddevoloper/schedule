@extends('layouts.app')


@section('content')


<div class="mb-3" style="margin: 5px;">
    <a href="/" class="btn btn-primary active float-right" role="button" aria-pressed="true">home page</a>   
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"> #</th>
        <th scope="col"> Week Day </th>
        <th scope="col"> Para to </th>
        <th scope="col"> Para from </th>
        <th scope="col"> Subject </th>
        <th scope="col"> Group </th>
        <th scope="col"> Room </th>
        <th scope="col"> Teacher </th>
    </tr>
    </thead>

    @if(count($schedules))
        @foreach($schedules as $key => $schedule)
        <tbody>
            <th scope="row">{{$key+1}}</th>
            <td> {{$schedule->weekDay['week_day']}} </td>
            <td> {{$schedule->para['time_from']}} </td>
            <td> {{$schedule->para['to_time']}} </td>
            <td> {{$schedule->subject['name']}} </td>
            <td> {{$schedule->group['name']}} </td>
            <td> {{$schedule->room['name']}} </td>
            <td> {{$schedule->teacher['first_name']}}  {{$schedule->teacher['last_name']}} </a></td>
        </tbody>
        @endforeach
    @endif
</table>

@endsection