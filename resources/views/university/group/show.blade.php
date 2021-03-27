<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container mt-5">
    <div class="mb-3" style="margin: 5px;">
        <!-- <a href="/schedule/groups/{group->id}" class="btn btn-primary active float-right" role="button" aria-pressed="true">Add Student</a> -->
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
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
</div>