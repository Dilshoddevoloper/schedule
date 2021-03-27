

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<div class="mb-3" style="margin: 5px;">
    <a href="/home" class="btn btn-primary active float-right" role="button" aria-pressed="true">home</a>   
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"> #</th>
        <th scope="col"> time </th>
        <th scope="col"> Monday </th>
        <th scope="col"> Tuesday </th>
        <th scope="col"> Wednesday </th>
        <th scope="col"> Thursday </th>
        <th scope="col"> Friday </th>
        <th scope="col"> Saturday </th>
    </tr>
    </thead>

    @if(count($paras))
    <tbody>
        
    @foreach($paras as $key => $para)
    <tr>
        <th scope="row">{{$key+1}} </th>
        <th scope="row"> {{$para->time_from}} - {{$para->to_time}}</th>
    </tr>
            
        @endforeach
        </tbody>
    @endif
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
