<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<div class="mb-3" style="margin: 5px;">
    <a href="/home" class="btn btn-primary active float-right" role="button" aria-pressed="true">home</a>   
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
            <td> <a href="#">{{$schedule->group['name']}} </a></td>
            <td> {{$schedule->room['name']}} </td>
            <td> {{$schedule->teacher['first_name']}}  {{$schedule->teacher['last_name']}} </a></td>
        </tbody>
        @endforeach
    @endif
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
